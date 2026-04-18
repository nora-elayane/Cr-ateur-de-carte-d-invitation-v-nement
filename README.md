# 🎟️ InviteForge — PHP Invitation Card Generator

A dynamic web application built with **PHP**, **HTML**, and **CSS** that generates beautifully styled invitation cards based on event type. Each event type renders its own unique themed design.

---

## ✨ Features

- 6 unique invitation themes, each with its own CSS aesthetic
- Form validation with date checking (past dates are rejected)
- Fully responsive cards for all screen sizes
- Custom typography via Google Fonts for each theme
- Smooth entrance animations on the generated card
- Clean, elegant form UI with the Warm Linen design system

---

## 📁 Project Structure

```
inviteforge/
│
├── index.php             # Main form — user fills in event details
├── result.php            # Generates and displays the invitation card
│
├── style.css             # Warm Linen stylesheet for index.php
│
├── wedding.css           # Ivory & gold — Art Nouveau luxury
├── anniversary.css       # Deep rose & black — Art Deco romance
├── babyshower.css        # Pastel lilac & mint — Playful & whimsical
├── party.css             # Neon & black — Maximalist energy
├── conference.css        # Navy & blue — Sharp corporate minimal
└── gala.css              # Black & gold — Opulent editorial
```

---

## 🚀 Getting Started

### Requirements

- PHP 7.4 or higher
- A local server environment: [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), or [Laragon](https://laragon.org/)
- A modern browser (Chrome, Firefox, Edge)

### Installation

1. **Clone or download** this repository into your server's root folder:

   ```bash
   # For XAMPP
   C:/xampp/htdocs/inviteforge/

   # For Laragon
   C:/laragon/www/inviteforge/
   ```

2. **Start your local server** (Apache).

3. **Open your browser** and go to:

   ```
   http://localhost/inviteforge/index.php
   ```

4. **Fill in the form** and click *Generate Invitation* to see your card.

---

## 🎨 Invitation Themes

| Type | Style | Fonts | Colors |
|------|-------|-------|--------|
| `wedding` | Art Nouveau luxury | Cinzel + Cormorant Garamond | Ivory, warm gold |
| `anniversary` | Art Deco romance | Playfair Display + Jost | Deep black, rose, gold |
| `baby shower` | Playful & whimsical | Fraunces + Nunito | Lilac, mint, peach |
| `party` | Maximalist neon | Bebas Neue + DM Sans | Black, neon pink, cyan |
| `conference` | Corporate minimal | Syne + Source Serif 4 | White, navy, electric blue |
| `gala` | Opulent editorial | Bodoni Moda + Barlow Condensed | Black, matte gold |

---

## 🧩 How It Works

```
User fills index.php form
        │
        ▼
POST data sent to result.php
        │
        ├── Validates all required fields
        ├── Checks date is not in the past
        ├── Lowercases event type
        │
        └── switch($type)
                ├── "wedding"     → wedding.css    + image + pageTitle
                ├── "anniversary" → anniversary.css + image + pageTitle
                ├── "baby shower" → babyshower.css  + image + pageTitle
                ├── "party"       → party.css        + image + pageTitle
                ├── "conference"  → conference.css   + image + pageTitle
                └── "gala"        → gala.css          + image + pageTitle
```

---

## 🔒 Validation Rules

- All fields are **required** — empty submissions redirect to `index.php`
- The **event date must not be in the past** — past dates redirect to `index.php`
- Event type is automatically converted to **lowercase** for consistent matching

---

## 🛠️ Built With

| Technology | Purpose |
|------------|---------|
| PHP 8+ | Server-side logic, form handling, routing |
| HTML5 | Page structure and semantic markup |
| CSS3 | Theming, animations, responsive layout |
| Google Fonts | Custom typography per invitation type |
| Unsplash | Free header images per event type |

---

## 📌 Notes

- Hero images are loaded from **Unsplash CDN** — an internet connection is required to display them. To use the project offline, download the images locally and update the `$imgSrc` paths in `result.php`.
- The `switch` statement in `result.php` uses **lowercase matching**, so the HTML `<select>` values must exactly match: `wedding`, `anniversary`, `baby shower`, `party`, `conference`, `gala`.

---

## 👩‍💻 Author

**Nora El Ayane** — Digital Development Student (Full Stack + AI Track)  
CMC Béni Mellal — OFPPT | Pôle Digital & IA

---

## 📄 License

This project was built to develop php skills. Free to use and modify for educational purposes.