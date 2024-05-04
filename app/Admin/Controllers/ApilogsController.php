<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\apilogs;

class ApilogsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'apilogs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new apilogs());

        //$grid->column('id', __('Id'));
        //$grid->column('Request_url', __('Request url'));
        $grid->column('Request_method', __('Request method'));
        //$grid->column('Request_headers', __('Request headers'));
        $grid->column('Request_body','<div style="text-align:Left">' . __('Request body') . '</div>')->display(function ($name) {
            // Split the name into an array of words
            $words = explode(' ', $name);
            
            // Define the number of words to display per line
            $wordsPerLine = 5; // Adjust this value as needed
            
            // Join the words into lines with the specified number of words
            $lines = array_chunk($words, $wordsPerLine);
            
            // Join lines with <br> tag for display
            return '<div style="text-align: left">' . implode('<br>', array_map(function ($line) {
                return implode(' ', $line);
            }, $lines)) . '</div>';
        });
        $grid->column('Response_status_code', __('Response status code'));
        //$grid->column('Response_headers', __('Response headers'));
        //$grid->column('Response_body', __('Response body'));
        $grid->column('created_at', __('Created at'))->display(function ($createdAt) {
            return \Carbon\Carbon::parse($createdAt)->format('Y-m-d H:i:s');
        });
        $grid->column('updated_at', __('Updated at'))->display(function ($updatedAt) {
            return \Carbon\Carbon::parse($updatedAt)->format('Y-m-d H:i:s');
        });
        $grid->disableCreateButton();
        $grid->actions(function ($actions,) {
            $actions->disableEdit();
        });
        $grid->disableFilter();
    
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
        $show = new Show(apilogs::findOrFail($id));

        //$show->field('id', __('Id'));
       // $show->field('Request_url', __('Request url'));
        $show->field('Request_method', __('Request method'));
       // $show->field('Request_headers', __('Request headers'));
        $show->field('Request_body', __('Request body'));
        $show->field('Response_status_code', __('Response status code'));
       // $show->field('Response_headers', __('Response headers'));
       // $show->field('Response_body', __('Response body'));
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
        $form = new Form(new apilogs());

        $form->text('Request_url', __('Request url'));
        $form->text('Request_method', __('Request method'));
        $form->textarea('Request_headers', __('Request headers'));
        $form->textarea('Request_body', __('Request body'));
        $form->number('Response_status_code', __('Response status code'));
        $form->textarea('Response_headers', __('Response headers'));
        $form->textarea('Response_body', __('Response body'));

        return $form;
    }
    public function create(\OpenAdmin\Admin\Layout\Content $content)
    {
        return abort(403, 'Forbidden');
    }

    /**
     * Disable the ability to edit existing items.
     *
     * @param mixed $id
     * @param \OpenAdmin\Admin\Layout\Content $content
     * @return void
     */
    public function edit($id, \OpenAdmin\Admin\Layout\Content $content)
    {
        return abort(403, 'Forbidden');
    }
       /**
     * Customize the tools (action) buttons.
     *
     * @return array
     */
    
   
}
