# RingCX WordPress Wallboard

**Live-Wallboard** für RingCX (`www.p-h-c.de`, Theme `twentyseventeen`) — zeigt Echtzeit-Queue-
Performance (offered/calls/abandon/disconnect/queued/talk-/wait-time je Gate) und Echtzeit-
Agentenstatus einer Agentengruppe. Architektonisch **anders** als das
[RingEX WordPress Wallboard](https://github.com/PatrickHeller/ringex-wordpress-wallboard) (dort:
historische Call-Log-Statistik von heute, kein Live-Status) — nur die Datei-/Theme-Struktur ist
analog. Vorlage für [ringcx-suitecrm-wallboard](https://github.com/PatrickHeller/ringcx-suitecrm-wallboard),
das dieselbe Logik 1:1 nach SuiteCRM portiert.

> **Hinweis:** Dieses Projekt wurde beim Anlegen dieses Repos auf dem Server entdeckt, war zuvor
> aber nicht dokumentiert. Funktionsumfang wurde anhand des Codes rekonstruiert, aber nicht erneut
> live gegen die RingCX-API verifiziert — vor Weiterentwicklung Code gegenprüfen.

## Aufbau

- `wp-content/themes/twentyseventeen/ringcx-app/dashboard.php` — Logik + HTML.
- `wp-content/themes/twentyseventeen/template-ringcx.php` — WordPress-Template-Einbindung.
- **Datenquellen** (RingCX Voice API): `{BASE_URL}/voice/api/v1/admin/accounts/{ACCOUNT_ID}/realTimeData/inbound`
  (Queue-Performance), `.../realTimeData/agent` (Live-Agentenstatus), `.../agentGroups/{AGENT_GROUP_ID}/agents`
  (Mitgliederliste, gemerged mit Live-Status — offline Agenten zeigen "NICHT ANGEMELDET").
- **Auth (zweistufig):** JWT-Bearer-Login gegen `platform.ringcentral.com`, danach Token-Tausch
  gegen `{BASE_URL}/api/auth/login/rc/accesstoken` für einen RingCX-eigenen Access-Token.
- Config: `ringcx-app/config.ini` (nicht Teil dieses Repos, Vorlage siehe `config.ini.example`).
  **Wichtig:** `BASE_URL` ist die RingCX-API-Root **ohne** `/voice/api/v1`-Suffix.

## Deploy

Nach `wp-content/` der WordPress-Installation kopieren. Datei gehört `www-data:www-data`.
