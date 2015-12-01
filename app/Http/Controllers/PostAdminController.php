<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\User;
use App\Post;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostAdminController extends Controller
{
	private $post;
	private $user;

	public function __construct(Post $post, User $user)
	{
		$this->post = $post;
		$this->user = $user;
	}

	public function index()
	{
		$posts = $this->post->paginate(5);

		return view('admin.post.index', compact('posts'));
	}

	public function create()
	{
		return view('admin.post.create', ['post' => $this->post]);
	}

	public function store(PostRequest $request)
	{
		$user = $this->user->first();

		try {
			$this->post->create(array_merge($request->all(), ['user_id' => $user->id]));

			return redirect()->route('admin.post.index');
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function edit($id)
	{
		try {
			$post = $this->post->findOrFail($id);

			return view('admin.post.edit', compact('post'));
		} catch (ModelNotFoundException $e) {
			echo $e->getMessage();
		}
	}

	public function update($id, PostRequest $request)
	{
		$this->post->find($id)->update($request->all());

		return redirect()->route('admin.post.index');
	}

	public function destroy($id)
	{
		$this->post->find($id)->delete();

		return redirect()->route('admin.post.index');
	}
}
