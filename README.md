
# Relaunch Lucas Cranach Archive
### by Jan Koll & Shirina Löber

## Projektbeschreibung

Das Projekt beschäftigt sich mit der Verbesserung / Ergänzung von Funktionen und Benutzbarkeit des Digital Cranach Archive für Front- und Backend. Auf Basis der bestehenden Seite (Stand August 2019) wurden Funktionen und Struktur betrachtet. Daraus resultierte, dass die gesamte Struktur von Inhalten und Seiten durch das überholte Design und den Aufbau der Navigation für Nutzer schwer zu erfassen ist. Gleiches gilt für die überladene Filterfunktion der einzelnen Artefakte. Eine seitenweite Suche ist gar nicht vorhanden. Um dem entgegen zu wirken, wurde sich für ein klareres Design (Adaption aus dem Screendesign Projekt der Uni TH-Köln 2018)  und eine einfachere Strukturierung des Inhalts entschieden. Das wird unterstützt von Funktionen wie _Scrool To Links_, einem Dark Mode, einer Vorlesefunktion, einer verbesserten Darstellung auf mobilen Geräten und einer Suche für das Frontend. Für das Backend wurde das CMS (Content Management System) Kirby verwendet. Dort findet sich eine graphische Oberfläche zur Inhaltserstellung, -pflege und -strukturierung.

Das Projekt ist ein Frontend Deep Dive im Cranach Kontext, da es sich mit der Repräsentation von Inhalten, die mit dem Framework Foundation 6 aufbereitet und dem CMS Kirby ausgeliefert werden, beschäftigt.

Das Ergebnis bietet dem Endnutzer eine benutzerfreundliche übersichtliche Webseite, die einfach zu navigieren und durchsuchen ist. Die Inhaltsersteller können ohne weitere technische Expertise Inhalte und Strukturen erstellen, löschen und verwalten.

Erreichte Ziele sind die Erstellung eines intuitiven Inhaltes und Backend Struktur, die Implementierung einer Vorlesefunktion, Bereitstellung einer augenschonenden Dark Mode Option, die Darstellung von multilingualen Inhalten, eine verbesserte mobile Ansicht,  _Scrool To Links_ für Inhaltsseiten und eine seitenweite Suche.

Nicht erreichte Ziele sind die Filterung von Gemälden anhand von mitgelieferten Tags, Paginierung der Suchergebnisse und Einbinden einer Preeload Animation beim erstmaligen Seitenaufruf.

Auf dem bisherigen Stand aufbauend wäre es möglich, eine PWA (Progressive Web App) zu entwickeln und zu einem interaktiven Museumführer zu adaptieren.

## Technische Fragen

### Installation

**Kirby**
Zur Installation wird nichts weiter als Apache Server benötigt (muss PHP Version > 7.3 unterstützen). Ist das Git in dessen Rootverzeichnis geklont, erreicht man die Seite unter der lokalen Adresse des Apache Servers (meist localhost:8888). In der Installation muss ein Benutzer angelegt werden, um den Content über das Backend zu manipulieren. Dazu gibt man hinter der URL „/panel“ ein und wird dort durch ein Formular zu Erstellung eines Kontos geleitet.

**Statisches Layout (Foundation Sites)**
Auf der Maschine müssen Node.js und das Modul „foundation-cli“ installiert sein. Im Repository befindet sich der Ordner „static-site-dummy“. Wenn man diesen über das Terminal ansteuert genügt es dort einmalig „npm install“ und danach „foundation watch“ auszuführen um einen Server zu starten, der den Code rendert und im Standardbrowser anzeigt.

## Technologien

**Kirby**
Die Wahl fiel auf Kirby, da dieses CMS über eine einfache Dateistruktur zum Verwalten der Inhalte verfügt, eine große und aktive Community sowie eine umfassende Doku für Support gibt und die Systemanforderungen für eine gute/ausreichende Performance sehr überschaubar sind.

**Kirby Builder**
Ist ein Plugin für Kirby, welches dem Benutzer ermöglicht im Backend einzelne Paragraphen zu erstellen und diese zu manipulieren.

**Foundation**
Dieses Framework kommt mit einer großen Anzahl an vorgefertigten Modulen, die sich über eine Settings Datei schnell an die eigenen Bedürfnisse anpassen lassen oder sich über eigene Style Files gut überschreiben/ergänzen lassen. Es sind auch einige grundlegende JavaScript Module (Slider, Accordion, Smoothscrool, etc.) nativ enthalten. Für jedes Modul lässt sich separat entscheiden, ob es mit gerendert wird, was zu schlankerem Code führt. Bei der von Foundation bereitgestellten Node Version lassen sich außerdem dynamische Templates erstellen, die den statischen Code bei einer aktiven Watch automatisch rendern und die Projektstruktur insgesamt übersichtlicher machen (auch SCSS wird unterstützt).

**Web Speech**
Wird im Projekt benutzt, um einzelne Paragraphen vorzulesen. Dabei handelt es sich um eine native JavaScript Bibliothek, die von allen gängigen Browsern unterstützt wird (wenn man den IE ignoriert).

## Diskussion / Reflexion

Probleme haben sich anfänglich bei der Benutzung von dem Kirby Plug-in „Kibry Builder“ ergeben. Dieser benötigt eine gesonderte Struktur in den Blueprint Files, welche durch ihre Verschachtelung stark gewöhnungsbedürftig ist. Soll zusätzlich noch ein Builder im Builder vorhanden sein, nimmt die Komplexität nochmal zu.

Weiterhin problematisch war es, wenn beim Einbinden von Cookies durch den Browsercache überschriebene Cookies beim Reload wieder erstellt werden und so das Ergebnis verfälschen (Dark Mode seitenübergreifend aktivieren / deaktivieren).

Um die Aufrechterhaltung der Seitenstruktur zu gewährleisten, gibt es für den Benutzer unlöschbare Seitentypen (News Übersicht, Forschung) (Dirty Hack).

Besonders positiv sticht der Aufbau des Backends hervor, welcher es dem Benutzer erlaubt ohne technische Expertise Inhalte und Strukturen zu erstellen, löschen und verwalten. Die Struktur erlaubt dabei keine unvorhergesehenen Verschachtelungen von Seiten (Maximal zwei Level Tiefe).

Viel Aufwand wurde in die Dynamisierung von Inhalten investiert. Dabei war nicht immer sofort erkennbar, wie man auf welche Informationsebene gelangt und / oder diese Information übergibt.

Refactoren könnte man die Struktur der Aktuelles Seite. In der jetzigen Implementierung erstellt man für jedes Jahr eine Unterseite, welche die zugehörigen Neuigkeiten fasst. Eleganter wäre eine Lösung, bei der die News alle auf der Ebene der Übersichtsseite angelegt werden und dort automatisch in Jahre gruppiert werden.

## Livedemo

Die Livedemo der Seite findet sich unter http://jankoll.de/cranach/. Die Login-in Daten für das Kirby Panel wurden per Mail an die betreffenden Personen weitergeleitet.
