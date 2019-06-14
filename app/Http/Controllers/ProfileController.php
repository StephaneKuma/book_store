<?php

namespace App\Http\Controllers;

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
     * ProfileController constructor.
     * @param UserRepository $userRepository
     * @param LevelRepository $levelRepository
     */
    public function __construct(UserRepository $userRepository, LevelRepository $levelRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->levelRepository = $levelRepository;
    }

    public function index(int $id)
    {
        $levels = $this->levelRepository->getAll();
        $user = $this->userRepository->getById($id);
        return view('user.index', compact('levels', 'user'));
    }
}
