<?php

namespace App\Admin\Controllers;

use App\Models\Link;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LinkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Link';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Link());

        $grid->column('link_id', __('Link id'));
        $grid->column('from_latitude', __('From latitude'));
        $grid->column('from_longtitude', __('From longtitude'));
        $grid->column('to_latitude', __('To latitude'));
        $grid->column('to_longtitude', __('To longtitude'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Link::findOrFail($id));

        $show->field('link_id', __('Link id'));
        $show->field('from_latitude', __('From latitude'));
        $show->field('from_longtitude', __('From longtitude'));
        $show->field('to_latitude', __('To latitude'));
        $show->field('to_longtitude', __('To longtitude'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Link());

        $form->number('link_id', __('Link id'));
        $form->decimal('from_latitude', __('From latitude'));
        $form->decimal('from_longtitude', __('From longtitude'));
        $form->decimal('to_latitude', __('To latitude'));
        $form->decimal('to_longtitude', __('To longtitude'));

        return $form;
    }
}
