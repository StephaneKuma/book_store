<?php

namespace App\Http\Controllers;

use App\Repositories\BookCategoryRepository;
use App\Repositories\BookRepository;
use App\Repositories\LevelRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * @var BookRepository
     */
    private $bookRepository;
    /**
     * @var BookCategoryRepository
     */
    private $categoryRepository;
    /**
     * @var LevelRepository
     */
    private $levelRepository;

    /**
     * BookController constructor.
     * @param BookRepository $bookRepository
     * @param BookCategoryRepository $categoryRepository
     * @param LevelRepository $levelRepository
     */
    public function __construct(BookRepository $bookRepository, BookCategoryRepository $categoryRepository,
        LevelRepository $levelRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
        $this->levelRepository = $levelRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = $this->levelRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $books = $this->bookRepository->getAll();
        return view('index', compact('levels', 'categories', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
