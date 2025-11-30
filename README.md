# Solidwork Contao Slider Captcha Bundle

Slider CAPTCHA Formularfeld für Contao 4.13.

Dieses Bundle stellt ein Slider‑Captcha als zusätzliches Sicherheitsmerkmal für Contao‑Formulare bereit. Das Captcha hilft, automatisierte Spam‑Anfragen zu reduzieren, ohne die Benutzerfreundlichkeit unnötig zu beeinträchtigen.

## Features

- Slider‑Captcha als eigenes Formularfeld in Contao
- Einfache Integration in bestehende Formulare
- Serverseitige Validierung über einen eigenen Validator
- Anpassbares Frontend (SCSS und TypeScript‑Assets)
- Kompatibel mit Contao **4.13 LTS**

## Voraussetzungen

- PHP `>= 7.4`
- Contao Core Bundle `^4.13`
- Composer

Die Angaben orientieren sich an der `composer.json`.

## Installation

### 1. Über Composer installieren

```bash
composer require solidwork/contao-slider-captcha-bundle
```

### 2. Contao Manager (optional)

Wenn du den Contao Manager verwendest, kannst du das Bundle dort suchen und installieren. Nach der Installation wird das Bundle automatisch im Contao‑System registriert.

## Konfiguration & Verwendung

### 1. Formularfeld im Backend hinzufügen

1. Im Contao Backend zu **Formulare** wechseln.
2. Das gewünschte Formular bearbeiten.
3. Ein neues Formularfeld vom Typ **Slider Captcha** hinzufügen (bereitgestellt durch dieses Bundle).
4. Feld speichern und Formular sichern.

> Passe die exakte Bezeichnung des Feldtyps in der Dokumentation an die tatsächlich im Backend sichtbaren Namen an (z. B. basierend auf `SliderCaptchaField`).

### 2. Validierung

Die Validierung erfolgt serverseitig über den bereitgestellten Validator (z. B. `SliderCaptchaValidator`).

- Ist das Captcha nicht oder falsch gelöst, bleibt das Formular auf der Seite.
- Eine entsprechende Fehlermeldung wird im Formular angezeigt.

### 3. Frontend‑Assets & Anpassung

Die Frontend‑Assets (SCSS & TypeScript) liegen im Projekt und werden zu produktiven Assets kompiliert.

- Quell‑Assets:
  - SCSS: `assets/scss`
  - TypeScript: `assets/ts` (konfiguriert über `assets/tsconfig.json`)
- Gebaute Assets (Ziel):
  - `src/Resources/public/slider-captcha` bzw. ausgelieferte Dateien unter `public/slider-captcha`

Du kannst die Styles und das Verhalten des Sliders anpassen, indem du:

- eigene SCSS‑Dateien erweiterst/überschreibst,
- eigenes JavaScript/TypeScript hinzufügst oder anpasst,
- Templates in `contao/templates` überschreibst.

## Entwicklung

Wenn du am Bundle mitentwickeln möchtest, kannst du die Frontend‑Assets lokal bauen.

### 1. Frontend‑Abhängigkeiten installieren

```bash
cd assets
npm install
# oder
# yarn install
```

### 2. TypeScript bauen

Die TypeScript‑Konfiguration findest du in `assets/tsconfig.json`. Der Build schreibt die kompilierten Dateien nach `../src/Resources/public/slider-captcha`.

```bash
cd assets
npm run build
# oder (je nach Konfiguration in package.json)
# npm run dev
# npm run watch
```

Passe die Befehle an die tatsächlichen Scripts in deiner `assets/package.json` an.

## Tests

Sofern Tests für dieses Bundle vorhanden sind, kannst du sie z. B. mit PHPUnit ausführen:

```bash
vendor/bin/phpunit
```

Füge hier bei Bedarf konkrete Hinweise zu vorhandenen Test-Suites oder Befehlen ein.

## Verzeichnisstruktur (Auszug)

```text
assets/               # Frontend-Assets (TS/SCSS, Build-Konfiguration)
config/               # Symfony/Contao Service-Konfiguration
contao/               # DCA, Sprachdateien, Templates, Formulare
src/                  # PHP-Code des Bundles
  ├─ ContaoManager/   # Contao Manager Plugin (Registrierung des Bundles)
  ├─ FormField/       # Formularfeld-Klassen (z. B. SliderCaptchaField)
  ├─ Validator/       # Validatoren (z. B. SliderCaptchaValidator)
  └─ Resources/       # Öffentliche Assets & weitere Ressourcen
public/slider-captcha # Ausgelieferte, ggf. gebaute Frontend-Assets
```

## Support & Issues

Bei Fehlern, Fragen oder Feature‑Requests bitte ein GitHub‑Issue im öffentlichen Repository eröffnen:

- Repository: `https://github.com/ArturJo/solidwork-contao-slider-captcha-bundle`
- Direkt zu den Issues: `https://github.com/ArturJo/solidwork-contao-slider-captcha-bundle/issues`

Bitte gib dabei möglichst an:

- Contao‑Version
- PHP‑Version
- Genaue Beschreibung des Problems bzw. der Anfrage
- Schritte zur Reproduktion (falls es sich um einen Fehler handelt)

