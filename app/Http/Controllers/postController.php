<?php
    
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\post;
    use App\category;
    
    class PostController extends Controller
    {
        public function getBlogIndex(){
            $posts = Post::all();
            return view('frontend/blog/index', ['posts' => $posts]);
        }
        
        public function getBlogIndex2(){
            $posts = Post::all();
            return view('frontend/blog/index', ['posts' => $posts])->renderSections()['content'];
        }
        
         public function getSinglePost($post_id, $end = 'frontend'){
            $post = Post::find($post_id);
            if(!$post){
                return Redirect()->route('blog/index')->with(['fail' => 'Post not found.']);
            }
            return view($end.'/blog/single', ['post' => $post]);
        }
        
        public function getCreatePost(){
            return view('admin/blog/create_post');
        }
        
        public function editPost($post_id){
            $post = Post::find($post_id);
            return View('admin/blog/edit_post', ['post' => $post]);
        }
        
        public function postCreatePost(Request $request){
            $this->validate($request,[
                'title' => 'required|max:120|unique:posts',
                'author' => 'required|max:80',
                'body' => 'required'
            ]);
            
            $post = new Post();
            $post->title = $request['title'];
            $post->author = $request['author'];
            $post->body = $request['body'];
            $post->save();
            
            return redirect()->route('admin/index')->with(['success' => 'Post successfully created!']);
        }
        
        public function deletePost($post_id){
            $post = Post::find($post_id);
            if(!$post){
                return Redirect()->route('admin/index')->with(['fail' => 'Post not found.']);
            }
            
            $post->delete();
            return Redirect()->route('admin/index')->with(['success' => 'Post successfully deleted']);
        }
        
        public function submitPost(Request $request){
            $this->validate($request,[
                'title' => 'required|max:120',
                'author' => 'required|max:80',
                'body' => 'required'
            ]);
            
            $post = Post::find($request['post_id']);
            $post->title = $request['title'];
            $post->author = $request['author'];
            $post->body = $request['body'];
            $post->update();
            
            return redirect()->route('admin/index')->with(['success' => 'Post successfully updated!']);
        }
        
    }
    
?>