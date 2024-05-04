<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Productitem;
use Encore\Admin\Grid\Displayers\Actions;


class ProductitemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Productitem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        
        $grid = new Grid(new Productitem());
    
        $grid->column('id', __('Id'));
        $grid->column('Product_Name', ('Title'))->display(function ($name) {
            // Split the name into an array of words
            $words = explode(' ', $name);
            
            // Define the number of words to display per line
            $wordsPerLine = 3; // Adjust this value as needed
            
            // Join the words into lines with the specified number of words
            $lines = array_chunk($words, $wordsPerLine);
            
            // Join lines with <br> tag for display
            return '' . implode('<br>', array_map(function ($line) {
                return implode(' ', $line);
            }, $lines)) . '';
        });
        $grid->column('Product_Price', ('Price'));
        $grid->column('Product_Description',('Description') )->display(function ($description) {
            // Split the description into an array of words
            $words = explode(' ', $description);
            
            // Define the number of words to display per line
            $wordsPerLine = 6; // Adjust this value as needed
            
            // Join the words into lines with the specified number of words
            $lines = array_chunk($words, $wordsPerLine);
            
            // Join lines with <br> tag for display
            return '' . implode('<br>', array_map(function ($line) {
                return implode(' ', $line);
            }, $lines)) . '';
        });
        $grid->column('Product_Quantity', ('Quantity') );
        $grid->column('Product_Image',('Image') )->image('', 100, 100);
       
        $grid->column('created_at', __('Created at'))->display(function ($createdAt) {
            return \Carbon\Carbon::parse($createdAt)->format('Y-m-d H:i:s');
        });
        $grid->column('updated_at', __('Updated at'))->display(function ($updatedAt) {
            return \Carbon\Carbon::parse($updatedAt)->format('Y-m-d H:i:s');
        });
        $grid->column('select', 'EDIT')->display(function () {
            $url = route('productitems.select', ['id' => $this->id]);
            return ' <a href="'.$url.'"><button class="btn btn-sm btn-info">AI Edit</button></a>';
        });
        
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
        $show = new Show(Productitem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Product_Name', __('Product Name'));
        $show->field('Product_Price', __('Product Price'));
        $show->field('Product_Description', __('Product Description'));
        $show->field('Product_Quantity', __('Product Quantity'));
        $show->field('Product_Image', __('Product Image'))->image();
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
        $form = new Form(new Productitem());

        $form->text('Product_Name', __('Product Name'));
        $form->text('Product_Price', __('Product Price'));
        $form->text('Product_Description', __('Product Description'));
        $form->text('Product_Quantity', __('Product Quantity'));
        $form->image('Product_Image', __('Product Image'));

        return $form;
    }
    public function selectItem($id)
    {
        $product = Productitem::findOrFail($id);

        return view('select-item', ['product' => $product]);
    }
   
   
}
