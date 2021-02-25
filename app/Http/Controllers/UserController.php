<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Repositories\CategoryRepository;
use App\Repositories\ImageRepository;
use App\Repositories\MovieCategoryRepository;
use App\Repositories\MovieRepository;
use App\Repositories\ProducerRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $movieRepository;
    private $movieCategoryRepository;
    private $producerRepository;
    private $imageRepository;
    private $categoryRepository;

    public function __construct()
    {
        $this->movieRepository=new (MovieRepository::class);
        $this->movieCategoryRepository = new (MovieCategoryRepository::class);
        $this->producerRepository = new (ProducerRepository::class);
        $this->imageRepository = new (ImageRepository::class);
        $this->categoryRepository = new (CategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['name'])){
            $item=$_GET['name'];
            $movie=Movie::Where('name',$item)->get()[0];

            return view('myUsers.index',['item'=>$item, 'movie' => $movie]);
        }
         $items=Movie::paginate(5);
        return view('myUsers.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myUsers.new_move'); // changes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producer=$this->producerRepository->createProducer($request);
        $newMovie=$this->movieRepository->createMovie($producer,$request);
        $this->movieCategoryRepository->createMovieCategory($newMovie,$request);
        $this->imageRepository->newImage($request,$newMovie);
        redirect()->route('movie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
