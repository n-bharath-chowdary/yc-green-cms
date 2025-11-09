# 🌿 YC Green CMS — Dynamic Startup Management Platform

> **Built by:** [Bharath Chowdary](https://github.com/n-bharath-chowdary)  
> **Framework:** Laravel 12 + Tailwind CSS  
> **Purpose:** Technical Assessment for **Increeks Technologies** — and a demonstration of full-stack precision, scalability, and design thinking.

---

## 💡 Overview
**YC Green CMS** is a complete Laravel-based Content Management System designed to manage startup ecosystems — allowing admins and editors to handle **companies**, **jobs**, and **posts** dynamically with instant public reflection.

This isn’t a rushed build — it’s an example of *engineering clarity, execution speed, and clean architecture.*

---

## 🚀 Core Highlights
✅ **End-to-End CRUD System**
- Companies  
- Jobs (linked to companies)  
- Posts (blogs/library content)

✅ **Role-Based Dashboards**
- **Admin:** Full control — users, companies, jobs, posts  
- **Editor:** Content contributor (posts only)  
- **Public:** Browses dynamic pages `/companies`, `/work`, `/library`

✅ **Dynamic Public Pages**
- `/companies` → Live startup data  
- `/work` → Real-time job listings  
- `/library` → Blog / knowledge posts  
- `/apply` → Styled multi-step mock form  

✅ **Smart Data Sync**
Admin updates instantly propagate to public views — no refresh needed.

✅ **Clean Validation & Flash Messaging**
Every form validated server-side with clean UX feedback.

✅ **Optimized Codebase**
Modular components, reusable layouts, strict naming, and scalable structure.

---

## 🎨 UI / Theme Palette
| Element | Color | Hex |
|----------|--------|------|
| Background | Light Green | `#8CFF98` |
| Text | Soft Mint | `#BCF5D0` |
| Headings | Deep Forest | `#22421E` |
| Cards | Rich Green | `#278450` |
| Buttons | Bright Lime | `#44FF00` |
| Hover | Earthy Green | `#399229` |
| Links | Light Neon | `#80FA68` |

---

## 🧱 Architecture
| Layer | Technology |
|-------|-------------|
| Backend | Laravel 12 (PHP 8.4) |
| Frontend | Blade + Tailwind CSS + Vite |
| Database | MySQL |
| Auth | Laravel Breeze |
| Version Control | Git Auto-Commit |
| Deployment | Render / Railway / Vercel |

---

## ⚙️ Installation

```bash
# Clone repository
git clone https://github.com/<your-username>/yc-green-cms.git
cd yc-green-cms

# Install dependencies
composer install
npm install && npm run build

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate --seed

# Run the app
php artisan serve
Then open http://127.0.0.1:8000
```
---

## 🔐 Default Credentials
| Role	| Email | Password |
|-------|--------|---------|
| Admin | admin@ycgreen.test | password123 |
| Editor | editor@ycgreen.test | password123 |

---

## 🧩 Auto Commit System
Automate version snapshots with a single click.

File: auto_commit.bat

```bat
@echo off
cd /d D:\YCombinator\YCombinator
git add -A
set commit_msg=Auto Commit - %date% %time%
git commit -m "%commit_msg%"
git push origin main
echo =======================================================
echo Pushed successfully to GitHub: %commit_msg%
echo =======================================================
pause
Run manually after each change or schedule via Windows Task Scheduler for automatic syncing.
```
---

## 🧾 Modules
| Module |	Path |	Description |
|-------|-------|----------|
| Companies	| /admin/companies | Manage startup profiles |
| Jobs | /admin/jobs	| CRUD for open positions |
| Posts | /editor/posts | Create and manage articles |
| Users	| /admin/users | View system users |
| Work | /work | Public job listing |
| Companies | /companies | Public startup directory |
| Apply | /apply | Styled multi-step form (mock UI) |

----

## 🧠 Key Engineering Choices
Single-source state: All data in MySQL, no local inconsistencies

Reusable components: DRY architecture across layouts

Strict validation: Every input validated at backend

Smart relationships: Jobs linked to company models

Scalable structure: CMS and public site share the same Laravel backend

---
## 🧾 Database Design
| Table	| Columns|
|--------|------|
| users | id, name, email, password, roles |
| companies | id, name, one_liner, category, logo_url, website |
| job | id, company_id, title, description, tags, location, is_active |
| posts |	id, title, excerpt, body, category, published |

---
## 🧠 Reflection
“I didn’t just make it run — I made it make sense.”

Zero hard-coded values

Clean code → minimal coupling, high cohesion

Matches startup-grade code quality standards

Designed for expansion (RAG, analytics, etc.)

---

## 🧑‍💻 Developer
### Bharath Choudary
#### AI/ML Engineer • Full Stack Developer • Product Innovator

🔗 <a href="https://kiddosphere.in" traget="_blank">Portfolio</a>
💼 <a href="https://linkedin.com/in/n-bharath-chowdary" traget="_blank">LinkedIn</a>
💻 <a href="https://github.com/n-bharath-chowdary" traget="_blank">GitHub</a>

----

# “Deadlines don’t matter when smart execution is in your DNA.”

### 🏁 Final Note
This repository represents:

Complete Laravel CMS architecture

Efficient time-bound execution

Startup-grade build quality

Ownership from concept to deployment

YC Green CMS isn’t an assessment project — it’s a working demonstration of real-world engineering discipline.
