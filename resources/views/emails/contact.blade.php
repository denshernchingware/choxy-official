<x-mail::message>
# 📩 New Contact Message

Hello Admin,
You have received a new inquiry from your website contact form.

---

### 👤 Sender Details

- **Name:** {{ $data['name'] }}
---
- **Email:** {{ $data['email'] }}
---
- **Phone:** {{ $data['phone'] }}
---
- **Subject:** {{ $data['subject'] }}

---

### 💬 Message
{{ $data['comment'] }}

---

<x-mail::button :url="'mailto:' . $data['email']">
Reply to {{ $data['name'] }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

