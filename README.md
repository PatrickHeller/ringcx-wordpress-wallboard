# RingCX WordPress Wallboard

Call-Wallboard für RingCX (Agentengruppen-Übersicht) als WordPress-Theme-Erweiterung
(`www.p-h-c.de`, Theme `twentyseventeen`). Schwesterprojekt zum
[RingEX WordPress Wallboard](https://github.com/PatrickHeller/ringex-wordpress-wallboard) und
Vorlage für [ringcx-suitecrm-wallboard](https://github.com/PatrickHeller/ringcx-suitecrm-wallboard).

> **Hinweis:** Dieses Projekt wurde beim Anlegen dieses Repos auf dem Server entdeckt, war zuvor
> aber nicht dokumentiert. Funktionsumfang wurde anhand des Codes rekonstruiert, aber nicht erneut
> live gegen die RingCX-API verifiziert — vor Weiterentwicklung Code gegenprüfen.

## Aufbau

- `wp-content/themes/twentyseventeen/ringcx-app/dashboard.php` — Logik + HTML (analog zum
  RingEX-Board).
- `wp-content/themes/twentyseventeen/template-ringcx.php` — WordPress-Template-Einbindung.
- Config: `ringcx-app/config.ini` (nicht Teil dieses Repos, Vorlage siehe `config.ini.example`).

## Deploy

Nach `wp-content/` der WordPress-Installation kopieren. Datei gehört `www-data:www-data`.
