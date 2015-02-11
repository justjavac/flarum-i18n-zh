<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| 验证
	|--------------------------------------------------------------------------
	*/

	"accepted"         => "必须接受 :attribute .",
	"active_url"       => ":attribute 不是有效的 URL.",
	"after"            => ":attribute 必须是晚于 :date 的日期.",
	"alpha"            => ":attribute 只能包含字母.",
	"alpha_dash"       => ":attribute 只能包含字母、数字和下划线.",
	"alpha_num"        => ":attribute 只能包含字母和数字.",
	"before"           => ":attribute 必须是早于 :date 的日期.",
	"between"          => array(
		"numeric" => ":attribute 必须在 :min 到 :max 之间.",
		"file"    => ":attribute 必须在 :min KB 到 :max KB 之间.",
		"string"  => ":attribute 必须在 :min 到 :max 个字符之间.",
	),
	"confirmed"        => ":attribute 与前次输入不匹配.",
	"date"             => ":attribute 不是有效的日期.",
	"date_format"      => ":attribute 不匹配规定的日期格式 :format .",
	"different"        => ":attribute 与 :other 不得相同.",
	"digits"           => ":attribute 必须是 :digits 位数字.",
	"digits_between"   => ":attribute 必须在 :min 到 :max 位数字之间.",
	"email"            => ":attribute 格式错误.",
	"exists"           => "您选择的 :attribute 不存在.",
	"image"            => ":attribute 必须是一张图片.",
	"in"               => "您选择的 :attribute 不可用.",
	"integer"          => ":attribute 必须是一个整数.",
	"ip"               => ":attribute 必须是一个有效的IP地址.",
	"max"              => array(
		"numeric" => ":attribute 不得多于 :max .",
		"file"    => ":attribute 不得多于 :max KB.",
		"string"  => ":attribute 不得多于 :max 个字符.",
	),
	"mimes"            => ":attribute 必须是一个 :values 格式的文件.",
	"min"              => array(
		"numeric" => ":attribute 不得少于 :min .",
		"file"    => ":attribute 不得少于 :min KB.",
		"string"  => ":attribute 不得少于 :min 个字符.",
	),
	"not_in"           => "您选择的 :attribute 不可用.",
	"numeric"          => ":attribute 必须为一个数字.",
	"regex"            => ":attribute 格式错误.",
	"required"         => ":attribute 不能为空.",
	"required_if"      => "当 :other 为 :value 时 :attribute 不能为空.",
	"required_with"    => "当 :values 存在时 :attribute 不能为空.",
	"required_without" => "当 :values 不存在时 :attribute 不能为空.",
	"same"             => ":attribute 和 :other 必须匹配.",
	"size"             => array(
		"numeric" => ":attribute 必须为 :size .",
		"file"    => ":attribute 必须为 :size KB.",
		"string"  => ":attribute 必须为 :size 个字符.",
	),
	"unique"           => ":attribute 已经存在.",
	"url"              => ":attribute 不是一个有效的 URL.",

	/*
	|--------------------------------------------------------------------------
	| 自定义验证规则
	|--------------------------------------------------------------------------
	|
	| 您可以在此自定义验证消息并使用命名公式
	| "attribute.rule" 来进行命名. 这让我们可
	| 以快速地给一个特定规则定义提示内容。
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| 自定义验证属性
	|--------------------------------------------------------------------------
	|
	| 下面的内容用于用一些更加对用户友好的内容
	| 替换占位符（如用“电子邮件”替换“email”），
	| 而这让我们的消息更加简洁。
	|
	*/

	'attributes' => array(),

);
