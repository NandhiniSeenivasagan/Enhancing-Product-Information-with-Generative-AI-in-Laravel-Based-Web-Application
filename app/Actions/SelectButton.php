use Encore\Admin\Actions\RowAction;

class SelectButton extends RowAction
{
    public function render()
    {
        $id = $this->row->id;
        $name = $this->row->Product_Name;
        $description = $this->row->Product_Description;

        $button = <<<HTML
<button class="btn btn-primary select-button" data-id="$id">Select</button>
HTML;

        return $button;
    }

    public function href()
    {
        return '';
    }

    public function confirm()
    {
        return '';
    }
}