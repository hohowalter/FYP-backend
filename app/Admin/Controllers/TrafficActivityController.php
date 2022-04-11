<?php

namespace App\Admin\Controllers;

use App\Models\TrafficActivity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TrafficActivityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TrafficActivity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TrafficActivity());

        $grid->column('traffic_activity_id', __('Traffic activity id'));
        $grid->column('link_id', __('Link id'));
        $grid->column('region', __('Region'));
        $grid->column('road_type', __('Road type'));
        $grid->column('traffic_speed', __('Traffic speed'));
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
        $show = new Show(TrafficActivity::findOrFail($id));

        $show->field('traffic_activity_id', __('Traffic activity id'));
        $show->field('link_id', __('Link id'));
        $show->field('region', __('Region'));
        $show->field('road_type', __('Road type'));
        $show->field('traffic_speed', __('Traffic speed'));
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
        $form = new Form(new TrafficActivity());

        $form->number('traffic_activity_id', __('Traffic activity id'));
        $form->number('link_id', __('Link id'));
        $form->text('region', __('Region'));
        $form->text('road_type', __('Road type'));
        $form->decimal('traffic_speed', __('Traffic speed'));

        return $form;
    }


}
