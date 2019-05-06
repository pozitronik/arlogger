<?php
declare(strict_types = 1);

namespace pozitronik\arlogger\models;

use yii\base\Model;

/**
 * Class TimelineEntry
 *
 * @property string $icon
 * @property string $time
 * @property string $caption
 * @property string $content
 * @property int $user
 */
class TimelineEntry extends Model {
	public $icon;
	public $time;
	public $caption;
	public $content;
	public $user;
}