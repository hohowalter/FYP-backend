<?php

namespace App\Admin\Controllers;

use App\Models\Recommendation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecommendationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Recommendation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Recommendation());

        $grid->column('recommendation_id', __('Recommendation id'));
        $grid->column('step', __('Step'));
        $grid->column('time_estmnate', __('Time estmnate'));
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
        $show = new Show(Recommendation::findOrFail($id));

        $show->field('recommendation_id', __('Recommendation id'));
        $show->field('step', __('Step'));
        $show->field('time_estmnate', __('Time estmnate'));
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
        $form = new Form(new Recommendation());

        $form->number('recommendation_id', __('Recommendation id'));
        $form->textarea('step', __('Step'));
        $form->time('time_estmnate', __('Time estmnate'))->default(date('H:i:s'));

        return $form;
    }
}
