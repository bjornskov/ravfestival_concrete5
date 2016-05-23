<?php

namespace Application\Block\arrangement;
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Block\BlockController;
use Core;

class Controller extends BlockController
{

    public $helpers = array('form');

    protected $btInterfaceWidth = 450;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btInterfaceHeight = 560;
    protected $btExportFileColumns = array('fID');
    protected $btTable = 'btArrangement';

    public function getBlockTypeDescription()
    {
        return t("Opretter en arrangement til brug på program siden.");
    }

    public function getBlockTypeName()
    {
        return t("Arrangement");
    }

    public function getSearchableContent()
    {
        return $this->name . "\n" . $this->position . "\n" . $this->company . "\n" . $this->paragraph;
    }

    public function view()
    {
        $image = false;
        if ($this->fID) {
            $f = \File::getByID($this->fID);
            if (is_object($f)) {
                $image = Core::make('html/image', array($f, false))->getTag();
                $image->alt($this->name);
                $this->set('image', $image);
            }
        }
    }
}