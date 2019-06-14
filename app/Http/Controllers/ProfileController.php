<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use App\Repositories\LevelRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var LevelRepository
     */
    private $levelRepository;
    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * ProfileController constructor.
     * @param UserRepository $userRepository
     * @param LevelRepository $levelRepository
     * @param BookRepository $bookRepository
     */
    public function __construct(UserRepository $userRepository, LevelRepository $levelRepository, BookRepository $bookRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->levelRepository = $levelRepository;
        $this->bookRepository = $bookRepository;
    }

    public function index(int $id)
    {
        $levels = $this->levelRepository->getAll();
        $user = $this->userRepository->getById($id);
        $book_numb = $user->books->count();
        return view('user.index', compact('levels', 'user', 'book_numb'));
    }

    public function show_books(int $id)
    {
        $levels = $this->levelRepository->getAll();
        $user = $this->userRepository->getById($id);
        $books = $user->books;
        return view('user.show_books', compact('levels', 'user', 'books'));
    }

    public function show_book(int $userId, int $bookId)
    {
        $levels = $this->levelRepository->getAll();
        $user = $this->userRepository->getById($userId);
        $book = $this->bookRepository->getById($bookId);
        return view('user.show_book', compact('levels', 'user', 'book'));
    }
}
