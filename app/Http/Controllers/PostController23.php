<?
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class PostController extends Controller{

    public function index()
    {
        $post=Post::orderBy('id', 'desc')->paginate(3);
        return view('index', compact('posts'));
    }
}



?>