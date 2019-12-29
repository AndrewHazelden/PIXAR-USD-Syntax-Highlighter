<?php
/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}


/*************************************************************************************
 * usd.php
 * -------
 * Author: Andrew Hazelden (andrew@andrewhazelden.com)
 * Copyright: (c) 2019
 * Release Version: 1.0
 * Date Started: 2019-11-16
 *
 * PIXAR USDA (ASCII) language file for GeSHi.
 * 
 * Code based upon the built-in Lua and BASH GeSHi modules.
 *
 * CHANGES
 * -------
 * 2019-11-16 (1.0.0)
 *  -  First Release

 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'OpenUSD',
    'COMMENT_SINGLE' => array('#'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Variables
        1 => "/\\$\\{[^\\n\\}]*?\\}/i",
        //BASH-style Heredoc
        2 => '/<<-?\s*?(\'?)([a-zA-Z0-9]+)\1\\n.*\\n\\2(?![a-zA-Z0-9])/siU',
        //Escaped String Starters
        3 => "/\\\\['\"]/siU",
        // Single-Line Shell usage: Hide the prompt at the beginning
        /* 4 => "/\A(?!#!)\s*(?>[\w:@\\/\\-\\._~]*[$#]\s?)?(?=[^\n]+\n?\Z)|^(?!#!)(\w+@)?[\w\\-\\.]+(:~?)[\w\\/\\-\\._]*?[$#]\s?/ms" */
        4 => "/\A(?!#!)(?:(?>[\w:@\\/\\-\\._~]*)[$#]\s?)(?=(?>[^\n]+)\n?\Z)|^(?!#!)(?:\w+@)?(?>[\w\\-\\.]+)(?>:~?[\w\\/\\-\\._]*?)?[$#]\s?/sm"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("\'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[nfrtv\\$\\\"\n]#i",
        // $var
        2 => "#\\$[a-z_][a-z0-9_]*#i",
        // ${...}
        3 => "/\\$\\{[^\\n\\}]*?\\}/i",
        // $(...)
        4 => "/\\$\\([^\\n\\)]*?\\)/i",
        // `...`
        5 => "/`[^`]*`/"
        ),
    'KEYWORDS' => array(
        1 => array(
				'add', 'append', 'asset', 'references', 'custom', 'floatAttribute', 'hidden', 'extent', 'inherits', 'kind', 'rel', 'surface', 'type', 'detail', 'variants', 'variantSet', 'variantSets', 'doc', 'delete', 'reorder', 'color', 'bezier', 'points', 'prop', 'set', 'group', 'transform', 'def', 'class', 'over', 'uniform', 'prepend', 'inputs', 'outputs', 'size', 'instanceable', 'visibility', 'primvars', 'disp', 

				'_3DPPoseEnable', '_3DPPref1', '_3DPSetupMats', '__faceindex', '__faceindex_SlimSurfOffset', '__gprimHandledid', '__handleid', 'axis', 'color', 'curvature', 'displayOpactity', 'framesPerSecond', 'grimID', 'interpolateBoundary', 'numVerts', 'occulusion', 'orientation', 'slimSurfID', 'timeSamples', 'twoSided', 'u_map1', 'v_map1', 'verts', 'shadingComplexity', 'pivotPosition', 'framePrecision', 'subLayers', 'startFrame', 'endFrame', 'excludes', 'includes', 'defaultPrim', 'displayColor', 'binding', 'material', 'xformOpOrder', 'translate', 'specularRoughness', 'diffuseGain'
            ),
        2 => array(
				'NULL', 'false', 'true', 'off', 'on'
            ),
        3 => array(
				'Xform', 'Subdiv', 'Curve', 'Capsule', 'Cone', 'Cube', 'Cylinder', 'Sphere', 'Scope', 'Shader', 'Plane', '__AnyType__', 'Material', 'Vector', 'Color', 'Dictionary', 'Matrix1d', 'Matrix2d', 'Matrix3d', 'Matrix4d', 'Normal', 'PointFloat', 'PointIndex', 'Transform', 'Vec2', 'Vec2d', 'Vec2f', 'Vec2i', 'Vec3d', 'Vec3f', 'Vec3i', 'Vec4d', 'Vec4f', 'Vec4i', 'vector2f', 'vector3f', 'bool', 'double', 'double2', 'double3', 'float', 'float2', 'float3', 'color3f', 'int', 'string', 'token', 'id', 'Mesh', 'gprims'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '!', '@', '%', '&', '*', '|', '/', '<', '>', ';;', '`'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #C79623; font-weight: bold;',
            2 => 'color: #C79623; font-weight: bold;',
            3 => 'color: #8DA6CE;',
            4 => 'color: #607392;',
            5 => 'color: #607392;'
            ),
        'COMMENTS' => array(
            1 => 'color: #5f5a60; font-style: italic;',
            2 => 'color: #5f5a60;',
            'MULTI' => 'color: #5f5a60; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #d6bb6d; font-weight: bold;',
            1 => 'color: #d6bb6d; font-weight: bold;',
            2 => 'color: #d6bb6d; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #daefa3;'
            ),
        'STRINGS' => array(
            0 => 'color: #8f9d6a;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cf8160;'
            ),
        'METHODS' => array(
            0 => 'color: #9b859d;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #afc4db;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Variables (will be handled by comment_regexps)
        0 => "\\$\\{[a-zA-Z_][a-zA-Z0-9_]*?\\}",
        //Variables without braces
        1 => "\\$[a-zA-Z_][a-zA-Z0-9_]*",
        //Variable assignment
        2 => "(?<![\.a-zA-Z_\-])([a-zA-Z_][a-zA-Z0-9_]*?)(?==)",
        //Shorthand shell variables
        4 => "\\$[*#\$\\-\\?!\d]",
        //Parameters of commands
        5 => "(?<=\s)--?[0-9a-zA-Z\-]+(?=[\s=]|<(?:SEMI|PIPE)>|$)"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '$'
        ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![\.\-a-zA-Z0-9_\$\#:])",
            'DISALLOWED_AFTER' =>  "(?![\.\-a-zA-Z0-9_%=\\/:])",
            2 => array(
                'SPACE_AS_WHITESPACE' => false
                )
            )
        )
);
