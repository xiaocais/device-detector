<?php declare(strict_types=1);

/**
 * Device Detector - The Universal Device Detection library for parsing User Agents
 *
 * @link http://piwik.org
 *
 * @license http://www.gnu.org/licenses/lgpl.html LGPL v3 or later
 */

namespace DeviceDetector\Yaml;

interface Parser
{
    /**
     * Parses the file with the given filename and returns the converted content
     *
     * @param string $file
     * @return mixed
     */
    public function parseFile(string $file);
}
