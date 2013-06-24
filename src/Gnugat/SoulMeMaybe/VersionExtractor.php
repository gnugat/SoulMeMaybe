<?php

namespace Gnugat\SoulMeMaybe;

/**
 * Extracts the version from a file.
 *
 * @author Loic Chardonnet <loic.chardonnet@gmail.com>
 */
class VersionExtractor
{
    /**
     * @const VERSION_LINE_NUMBER The line where the version can be found.
     */
    const VERSION_LINE_NUMBER = 7;

    /**
     * @var string
     */
    private $versionNumber;

    /**
     * @param string $versionFilePath
     *
     * @throws \RuntimeException If the file couldn't be opened
     */
    public function __construct($versionFilePath)
    {
        $versionFile = file($versionFilePath);
        $this->versionNumber = trim($versionFile[self::VERSION_LINE_NUMBER]);
    }

    /**
     * @return string
     */
    public function getVersionNumber()
    {
        return $this->versionNumber;
    }
}