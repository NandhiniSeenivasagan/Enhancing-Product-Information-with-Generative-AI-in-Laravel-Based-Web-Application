<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CreateApiLogs;

class CreateApiLogsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CreateApiLogs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CreateApiLogs());

        $grid->column('id', __('Id'));
        $grid->column('request_url', __('Request url'));
        $grid->column('request_method', __('Request method'));
        $grid->column('request_headers', __('Request headers'));
        $grid->column('request_body', __('Request body'));
        $grid->column('response_status_code', __('Response status code'));
        $grid->column('response_headers', __('Response headers'));
        $grid->column('response_body', __('Response body'));
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
        $show = new Show(CreateApiLogs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('request_url', __('Request url'));
        $show->field('request_method', __('Request method'));
        $show->field('request_headers', __('Request headers'));
        $show->field('request_body', __('Request body'));
        $show->field('response_status_code', __('Response status code'));
        $show->field('response_headers', __('Response headers'));
        $show->field('response_body', __('Response body'));
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
        $form = new Form(new CreateApiLogs());

        $form->text('request_url', __('Request url'));
        $form->text('request_method', __('Request method'));
        $form->textarea('request_headers', __('Request headers'));
        $form->textarea('request_body', __('Request body'));
        $form->number('response_status_code', __('Response status code'));
        $form->textarea('response_headers', __('Response headers'));
        $form->textarea('response_body', __('Response body'));

        return $form;
    }
}
