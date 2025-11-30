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

### 2. Validierung

Die Validierung erfolgt serverseitig über den bereitgestellten Validator (z. B. `SliderCaptchaValidator`).

- Ist das Captcha nicht oder falsch gelöst, bleibt das Formular auf der Seite.
- Eine entsprechende Fehlermeldung wird im Formular angezeigt.

### 3. Template & Ausgabe im Frontend

Das Formularfeld wird über ein eigenes Contao-Template gerendert:

- Standard-Template: `form_slider_captcha.html5`
- Speicherort im Bundle: `src/Resources/contao/templates/form_slider_captcha.html5`

Dadurch wird das Feld vollständig in den üblichen Contao-Template-Flow eingebunden. Du kannst das Markup wie gewohnt anpassen:

1. Lege im Projektordner `contao/templates` eine eigene Datei an, z. B. `form_slider_captcha.html5` oder ein benutzerdefiniertes Template wie `form_slider_captcha_custom.html5`.
2. Wähle im Contao-Backend beim Formularfeld unter **Template** das gewünschte Template aus (falls du ein `customTpl` verwenden möchtest).

Im Template stehen dir u. a. die Standard-Widget-Variablen zur Verfügung (z. B. `$this->name`, `$this->id`). Das Bundle registriert außerdem automatisch die benötigten JavaScript- und CSS-Dateien für den Slider.

### 4. Frontend‑Assets & Anpassung

Die Frontend‑Assets (SCSS & TypeScript) liegen im Projekt und werden zu produktiven Assets kompiliert.

- Quell‑Assets:
  - SCSS: `assets/scss`
  - TypeScript: `assets/ts` (konfiguriert über `assets/tsconfig.json`)
- Gebaute Assets (Ziel):
  - `src/Resources/public/slider-captcha` bzw. ausgelieferte Dateien unter `public/slider-captcha`

Du kannst die Styles und das Verhalten des Sliders anpassen, indem du:

- eigene SCSS‑Dateien erweiterst/überschreibst,
- eigenes JavaScript/TypeScript hinzufügst oder anpasst,
- Templates in `contao/templates` überschreibst (insbesondere `form_slider_captcha.html5`).

## Entwicklung

Wenn du am Bundle mitentwickeln möchtest, kannst du die Frontend‑Assets lokal bauen.

### 1. Frontend‑Abhängigkeiten installieren

```bash
cd assets
npm install
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

## Support & Issues

Bei Fehlern, Fragen oder Feature‑Requests bitte ein GitHub‑Issue im öffentlichen Repository eröffnen:

- Repository: `https://github.com/ArturJo/solidwork-contao-slider-captcha-bundle`
- Direkt zu den Issues: `https://github.com/ArturJo/solidwork-contao-slider-captcha-bundle/issues`

Bitte gib dabei möglichst an:

- Contao‑Version
- PHP‑Version
- Genaue Beschreibung des Problems bzw. der Anfrage
- Schritte zur Reproduktion (falls es sich um einen Fehler handelt)

---

_Stand der Dokumentation: 2025‑11‑30_

