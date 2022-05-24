<?php

class ModalHelperer
{

    /*
    |--------------------------------------------------------------------------
    | Create Modal Layout
    |--------------------------------------------------------------------------
    |
    | These set of function helps create Modal Layout of different
    | types; Slide-Up, Stick-Up, Slide-Right and Fill-In.
    |
     */
    public function modal($para = null, $key = null)
    {
        if (!isset($para['title'])): $para['title'] = null;
        endif;
        if (!isset($para['subtitle'])): $para['subtitle'] = null;
        endif;
        if (!isset($para['classlist'])): $para['classlist'] = null;
        endif;
        if (!isset($para['file'])): $para['file'] = null;
        endif;
        if (!isset($para['size'])): $para['size'] = 'md';
        endif;
        if (!isset($para['url'])): $para['url'] = null;
        endif;
        if (!isset($para['submit'])): $para['submit'] = 'Submit';
        endif;
        if (!isset($para['cancel'])): $para['cancel'] = null;
        endif;
        if (!isset($para['form'])): $para['form'] = null;
        endif;
        if (!isset($para['name'])): die("<h5>Modal has no 'Name' Parameter!</h5>");
        else:
            if (!is_null($key)):
                $this->name_key = $para['name'] . $key;
                $this->key = $key;
            else:
                $this->name_key = $para['name'];
            endif;
        endif;
        $this->title = $para['title'];
        $this->subtitle = $para['subtitle'];
        $this->file = $para['file'];
        $this->url = $para['url'];
        $this->submit = $para['submit'];
        $this->cancel = $para['cancel'];
        $this->form = $para['form'];
        $this->size = $para['size'];
        $this->classlist = $para['classlist'];
        $this->input = null;
        $this->data = array();
        return $this;
    }

    public function modal_field($field = null, $value = null)
    {
        if (!is_null($field) && !is_array($value) && !is_object($value)):
            $this->input = $this->input . "<input type='hidden' name='" . $field . "' value='" . $value . "'>";
        elseif ((!is_null($field) && is_array($value)) || (!is_null($field) && is_object($value))):
            $this->data[$field] = $value;
        else:
            $this->input = null;
        endif;
        return $this;
    }

    public function modal_body($data = null, $content = null)
    {
        $this->classlistArray = !is_null($this->classlist) ? explode(' ', $this->classlist) : ['slide-up'];
        switch ($this->classlistArray) {
            case in_array('fill-in', $this->classlistArray):
                echo '
                <section class="modal ' . $this->classlist . '" id="' . $this->name_key . '" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                    </button>';
                if (!is_null($this->title)) {
                    echo '<div class="modal-dialog "><div class="modal-content"><div class="modal-header"><h4 class="text-left pb-5">' . $this->title . '</h4></div><div class="modal-body">';
                }
                break;

            case in_array('slide-right', $this->classlistArray):
                echo '
                <section class="modal ' . $this->classlist . '" id="' . $this->name_key . '" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                <div class="modal-content-wrapper">
                <div class="modal-content bg-master-lightest">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                    </button>
                <div class="container-xs-height full-height">
                <div class="row-xs-height">
                <div class="modal-body col-xs-height col-middle text-center">';
                break;

            default:
                echo '
                <section class="modal ' . $this->classlist . '" id="' . $this->name_key . '" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-' . $this->size . '">
                <div class="modal-content-wrapper">
                <div class="modal-content bg-master-lightest">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                    </button>';
                if (!is_null($this->title)):
                    if (!is_null($this->subtitle)): $no_margin = 'no-margin';
                    else:$no_margin = '';
                    endif;
                    echo '<h4 class="' . $no_margin . '">' . $this->title . '</h4>';
                endif;
                if (!is_null($this->subtitle)):
                    echo '<p class="">' . $this->subtitle . '</p>';
                endif;
                echo '</div><div class="modal-body">';
                break;
        }
        if (is_array($data) && !empty(is_string($content))):
            extract($data);
            echo '<p class="">' . $content . '</p>';
        endif;
        if (!empty(is_string($data)) && is_null($content)):
            echo '<p class="">' . $data . '</p>';
        endif;
        if (is_array($data) && is_null($content)):
            extract($data);
        endif;
        if (!is_null($this->url)):
            $form_name_id = 'form_' . $this->name_key;
            echo '<form id="' . $form_name_id . '" name="' . $form_name_id . '" method="POST" enctype="multipart/form-data" action="' . $this->url . '">';
        endif;
        if (!is_null($this->input)):
            echo $this->input;
        endif;
        if (!is_null($this->data)):
            extract($this->data);
        endif;
        if (!is_null($this->file)):
            include $this->file;
        endif;
        return $this;
    }

    public function modal_end($content = null)
    {

        switch ($this->classlistArray) {
            case in_array('fill-in', $this->classlistArray):
                if (!is_null($this->url)):
                    echo '</form>';
                endif;
                if (!is_null($this->title)):
                    echo "</div><div class='modal-footer'>" . $content . "</div></div></div>";
                endif;
                echo "</section>";
                break;

            case in_array('slide-right', $this->classlistArray):
                if (!is_null($this->url)): empty($this->form) ? null : $this->form = 'form="' . $this->form . '"';
                    echo '<button class="btn btn-success btn-block" type="submit" ' . $this->form . '>' . $this->submit . '</button></form>';
                    if (!is_null($this->cancel)):
                        echo '<button class="btn btn-block cancel btn-danger" data-dismiss="modal">' . $this->cancel . '</button>';
                    endif;
                endif;
                echo "</div></div></div></div></div></div></section>";
                break;

            default:
                if (!is_null($this->url)):
                    echo '<div style="display:flex; justify-content:flex-end;">';
                    if (!is_null($this->cancel)): empty($this->form) ? null : $this->form = 'form="' . $this->form . '"';
                        echo '<button class="btn m-t-10 m-r-10 cancel btn-danger" type="button" data-dismiss="modal">' . $this->cancel . '</button>';
                    endif;
                    echo '<button class="btn btn-success m-t-10" type="submit" ' . $this->form . '>' . $this->submit . '</button></div></form>';
                endif;
                echo "</div></div></div></div></section>";
                break;
        }
    }
}