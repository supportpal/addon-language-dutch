<?php declare(strict_types=1);

namespace Addons\Languages\Dutch\Controllers;

use App\Modules\Core\Controllers\Languages\Language;

class Dutch extends Language
{
    /**
     * Language identifier.
     */
    const IDENTIFIER = 'Dutch';

    /**
     * Initialise the language.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setIdentifier(self::IDENTIFIER);
    }

    /**
     * Languages can run an installation routine when they are activated. This will typically include adding default
     * values, initialising database tables and so on.
     *
     * @return boolean
     */
    public function activate()
    {
        return true;
    }

    /**
     * Deactivating serves as temporarily disabling the language, but the files still remain. This function should
     * typically clear any caches and temporary directories.
     *
     * @return boolean
     */
    public function deactivate()
    {
        return true;
    }

    /**
     * When a language is uninstalled, it should be completely removed as if it never was there. This function should
     * delete any created database tables, and any files created outside of the language directory.
     *
     * @return boolean
     */
    public function uninstall()
    {
        return true;
    }
}
