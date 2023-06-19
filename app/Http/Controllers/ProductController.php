<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DataTables;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
          
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.route("product.edit", $row->id).'"  class="edit btn btn-success btn-sm" >Edit</a>';
                    return $actionBtn;
                })
                ->addColumn('delete', function($row){
                    $actionBtn = ' <form action="'.route("product.destroy", $row->id) .'" method="post">
                    
                    <input type="hidden" name="_token" value=" '.csrf_token().' ">
                    <input type="hidden" name="_method" value="DELETE" >
                    
                    <input type="submit" name="submit" value="Delete"  class="delete btn btn-danger btn-sm">
                    </form>';
                    return $actionBtn;
                })
               
                ->addColumn('image', function ($row) {
                    return '<img src="'.$row->getFirstMediaUrl('image').'"width="100"/>';
                })
                ->rawColumns(['action', 'delete','image'])
                ->make(true);
        }

        return view('product.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status'            => 'required',
            'name'              => 'required',
            'discount'           => 'required',
            'special_price'     => 'required',
            'description'       => 'required',
            'link'              => 'required',
            'mrp'              => 'required',

        ]);
        $productData = $request->all();
        $data = [
            'name'               => $productData['name'],
            'status'             => $productData['status'],
            'discount'            => $productData['discount'],
            'special_price'      => $productData['special_price'],
            'mrp'                => $productData['mrp'],
            'description'        => $productData['description'],
            'link'               => $productData['link'],
        ];
        // dd($data);

        $product = Product::create($data);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $product->addMediaFromRequest('image')->toMediaCollection('image');
        }

    return redirect()->route('product.index')->withSuccess('Product Added Successfully..');
       
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
        $productData = $request->only('name', 'status', 'mrp', 'special_price','description','link');
        $table->string("name", 100);
        $table->tinyInteger("status");
        $table->decimal("mrp", 10, 5);
        $table->decimal("special_price", 5, 2);
        $table->text("description");
        $table->text("link", 100);
        $table->timestamps();

        // $productData['url_key']=$this->makeUrlKey($request, $productData['name']);

        $product = Product::where('id', $id)->first();
        $product->update($productData);
        
      

        $products = Product::where('id', $id)->find($id);
        
        if ($request->hasFile('images')) {
            $products->clearMediaCollection('images');
            foreach ($request->file('images') as $file) {
                if ($file->isValid()) {
                    $products->addMedia($file)->toMediaCollection('images');
                }
            }
        }

        return redirect()->route('product.index')->withSuccess('Product Updated Successfully..');

 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->withSuccess('Product Deleted Successfully..');
    }

}