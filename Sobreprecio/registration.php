<?php
/**
 * @author      Adrian Romero <romero.adrian@reevolution.com.mx> || Reevolution Team
 * @package     Reevolution/InsertOrder
 * @copyright   Copyright (c) 2023 Reevolution (https://reevolution.com.mx/)
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Roma_Sobreprecio',isset($file) ? dirname($file) : __DIR__);
