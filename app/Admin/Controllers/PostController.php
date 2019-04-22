<?php

namespace App\Admin\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PostController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->id('文章ID');
        $grid->user_id('作者');
        $grid->post_img('文章导图');
        $grid->title('标题');
        $grid->sort_id('分类');
        $grid->abstract('简介');
        $grid->content('文章内容');
        $grid->keywords('关键字');
        $grid->description('描述');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->id('文章ID');
        $show->user_id('作者');
        $show->post_img('文章导图');
        $show->title('标题');
        $show->sort_id('分类');
        $show->abstract('简介');
        $show->content('文章内容');
        $show->keywords('关键字');
        $show->description('描述');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post);

        $form->switch('user_id', '作者');
        $form->text('post_img', '文章导图');
        $form->text('title', '标题');
        $form->switch('sort_id', '分类');
        $form->text('abstract', '简介');
        $form->textarea('content', '文章内容');
        $form->text('keywords', '关键字');
        $form->text('description', '描述');

        return $form;
    }
}
