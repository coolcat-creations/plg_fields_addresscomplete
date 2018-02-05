<?php defined('_JEXEC') or die();

JFormHelper::loadFieldClass('text');

class JFormFieldAddresscomplete extends JFormFieldText
{

protected $type = 'Addresscomplete';

public function getInput()
{
$doc = JFactory::getDocument();
$doc->addScript('https://cdn.jsdelivr.net/npm/places.js@1.4.15', array(), array('defer' => 'defer'));
$doc->addScriptDeclaration('document.addEventListener("DOMContentLoaded", function(event) {
var placesAutocomplete = places({
container: document.querySelector(".address-input")
});

});');

$placeholder = JText::_('PLG_FIELDS_ADDRESSCOMPLETE_DESTINATION');

$field = '<input 
				name="' . $this->name . '"
				id="' . $this->id . '"
				class="address-input"
				placeholder="' . $placeholder . '">';
return $field;
}

}

