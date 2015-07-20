<?php

/**
 * @param $name
 *
 * @return bool
 */
function hasSection($name)
{
    return array_key_exists($name, app('view')->getSections());
}


/**
 * @param $path
 *
 * @return string
 */
function getStyle($path)
{
    $filesystem = app('Illuminate\Filesystem\Filesystem');

}

/**
 * @param $path
 *
 * @return string
 */
function getScript($path)
{
    $filesystem = app('Illuminate\Filesystem\Filesystem');

}

/**
 * @param $logoOption
 * @param $customer
 * @param $company
 *
 * @return string
 */
function getImage($logoOption, $customer, $company, $cssClass = 'img-responsive')
{
    $filesystem = app('Illuminate\Filesystem\Filesystem');

}

/**
 * Generate Input Helper Icon and text
 * @param $text
 * @return string
 */
function inputHelperText($text)
{
    return '<span>
				<a href="#" data-info data-text="'.$text.'">
					<i class="fa fa-info"></i>
				</a>
			</span>';
}