<?php
declare(strict_types=1);
namespace Cheffjeff\LyfterComposerBlock\CheffJeffTest;


use Lyfter\Blocks\BladeBlock;
use StoutLogic\AcfBuilder\FieldsBuilder;


class LyfterComposerBlock extends BladeBlock
{
   public ?string $icon = 'fa-rocket-launch';


   public function __construct()
   {
       parent::__construct(
           __('LyfterComposerBlock', 'lyfter'),
           __('Dit is een test block...', 'lyfter')
       );
   }


   public function getConfig(): ?FieldsBuilder
   {
       $fields = $this->getFieldsBuilder();
       $fields->addText('title');
       $fields->addWysiwyg('content');


       return $fields;
   }


   // This is how you customize a param value
   protected function setTitle(?string $title): string
   {
       return $title ?: 'Hello Test block!';
   }


   protected function additionalParams(array $params): array
   {
       return [];
   }
}
