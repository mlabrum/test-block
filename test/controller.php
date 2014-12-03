<?php
namespace Application\Block\Test;

use Concrete\Core\File\File;
use \Concrete\Core\Block\BlockController;
use Concrete\Core\Page\Page;


/**
 * The controller for the Hero block.
 *
 */
class Controller extends BlockController {

	protected $btTable = 'btTestBlock';
	protected $btInterfaceWidth = "600";
	protected $btInterfaceHeight = "465";

	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btSupportsInlineEdit = false;
	protected $btSupportsInlineAdd = false;
	protected $btWrapperClass = 'ccm-ui';

	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared

	public function getBlockTypeDescription() {
		return t("Test.");
	}

	public function getBlockTypeName() {
		return t("Test");
	}

	public function view(){

	}

	public function add() {
		$this->edit();
	}

	public function edit() {
		$this->requireAsset('redactor');
		$this->requireAsset('core/imageeditor');
	}

}

?>
