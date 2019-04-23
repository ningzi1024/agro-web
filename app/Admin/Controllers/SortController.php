<?php

namespace App\Admin\Controllers;

use App\Sort;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SortController extends Controller
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
        $grid = new Grid(new Sort);

        $grid->id('Id');
        $grid->name('名称');
        $grid->parent_id('父级')->display(function($parent_id){
            if(empty($parent_id)){
                return '无';
            }else{
                return Sort::find($parent_id)->name;
            }
        });
        $grid->desc('描述');
        $grid->level('级别');
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
        $show = new Show(Sort::findOrFail($id));

        $show->id('Id');
        $show->name('名称');
        $show->parent_id('父级')->display(function($parent_id){
            if(empty($parent_id)){
                return '无';
            }else{
                return Sort::find($parent_id)->name;
            }
        });
        $show->desc('描述');
        $show->level('级别');
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
        $form = new Form(new Sort);
        $option = $this->showSorts();

        $form->text('name', '名称');
        $form->select('parent_id', '父级')->options($option);
        $form->text('desc', '描述');
        $form->text('level', '级别');

        return $form;
    }

    protected function showSorts(){
        $sort = Sort::all();
        $arr = [0=>'最高级'];
        foreach ($sort as $item) {
            if($item->level==1){
                $arr[$item->id] = $item->name;
            }
        }
        return $arr;
    }
}
