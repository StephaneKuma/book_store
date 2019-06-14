<?php

namespace App\Http\Controllers;

use App\Repositories\BookCategoryRepository;
use App\Repositories\BookRepository;
use App\Repositories\BookSubCategoryRepository;
use App\Repositories\LevelRepository;
use App\Repositories\SubLevelRepository;
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
     * @var SubLevelRepository
     */
    private $subLevelRepository;
    /**
     * @var BookSubCategoryRepository
     */
    private $subCategoryRepository;

    /**
     * BookController constructor.
     * @param BookRepository $bookRepository
     * @param BookCategoryRepository $categoryRepository
     * @param LevelRepository $levelRepository
     * @param SubLevelRepository $subLevelRepository
     * @param BookSubCategoryRepository $subCategoryRepository
     */
    public function __construct(BookRepository $bookRepository, BookCategoryRepository $categoryRepository,
        LevelRepository $levelRepository, SubLevelRepository $subLevelRepository, BookSubCategoryRepository $subCategoryRepository)
    {
        $this->middleware('auth')->except('index', 'show');
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
        $this->levelRepository = $levelRepository;
        $this->subLevelRepository = $subLevelRepository;
        $this->subCategoryRepository = $subCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = $this->levelRepository->getAll();
        $books = $this->bookRepository->getPaginated(8);
        $links = $books->render();
        return view('book.index', compact('levels', 'books', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = $this->levelRepository->getAll();
        $sub_levels = $this->subLevelRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $sub_categories = $this->subCategoryRepository->getAll();
        return view('book.create', compact('levels', 'categories', 'sub_categories', 'sub_levels'));
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
        $levels = $this->levelRepository->getAll();
        $book = $this->bookRepository->getById($id);
        return view('book.show', compact('levels', 'book'));
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

    public function search_by_sub_level(string $level, string $sub_level)
    {
        $levels = $this->levelRepository->getAll();
        $subLevel = $this->subLevelRepository->getByName($sub_level);

        $books = $subLevel[0]->books;
        $links = null;
        return view('book.index', compact('levels', 'books', 'links'));
    }
}
