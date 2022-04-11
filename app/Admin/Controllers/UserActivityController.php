<?php

namespace App\Admin\Controllers;

use App\Models\User_activity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserActivityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User_activity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User_activity());

        $grid->column('user_activities_id', __('User activities id'));
        $grid->column('fingerprint', __('Fingerprint'));
        $grid->column('startPoint', __('StartPoint'));
        $grid->column('endPoint', __('EndPoint'));
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
        $show = new Show(User_activity::findOrFail($id));

        $show->field('user_activities_id', __('User activities id'));
        $show->field('fingerprint', __('Fingerprint'));
        $show->field('startPoint', __('StartPoint'));
        $show->field('endPoint', __('EndPoint'));
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
        $form = new Form(new User_activity());

        $form->textarea('fingerprint', __('Fingerprint'));
        $form->text('startPoint', __('StartPoint'));
        $form->text('endPoint', __('EndPoint'));
        $form->decimal('from_latitude', __('From latitude'));
        $form->decimal('from_longtitude', __('From longtitude'));
        $form->decimal('to_latitude', __('To latitude'));
        $form->decimal('to_longtitude', __('To longtitude'));

        return $form;
    }
}
