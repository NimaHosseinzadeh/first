<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="bg-[linear-gradient(135deg,rgb(102,126,234)_0%,rgb(118,75,162)_100%)] font-Inter min-h-screen flex flex-col">

    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-[rgba(255,255,255,0.1)] backdrop-blur-md border-b border-[rgba(255,255,255,0.2)] shadow-md">
        <h1 class="text-white text-2xl font-bold">پنل مدیریت</h1>
        <a href="index.html" class="text-white bg-[rgba(255,255,255,0.2)] hover:bg-[rgba(255,255,255,0.3)] px-4 py-2 rounded-lg transition-all">خروج</a>
    </header>

    <div class="flex flex-1 flex-col lg:flex-row">

        <!-- Sidebar -->
        <aside class="w-full lg:w-64 bg-[rgba(255,255,255,0.05)] backdrop-blur-md p-6 flex flex-col gap-4 border-r border-[rgba(255,255,255,0.2)]">
            <a href="#" class="text-white py-2 px-4 rounded-lg hover:bg-[rgba(255,255,255,0.2)] transition-all">داشبورد</a>
            <a href="#" class="text-white py-2 px-4 rounded-lg hover:bg-[rgba(255,255,255,0.2)] transition-all">کاربران</a>
            <a href="#" class="text-white py-2 px-4 rounded-lg hover:bg-[rgba(255,255,255,0.2)] transition-all">تنظیمات</a>
            <a href="#" class="text-white py-2 px-4 rounded-lg hover:bg-[rgba(255,255,255,0.2)] transition-all">گزارش‌ها</a>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card Example -->
                <div class="bg-[rgba(255,255,255,0.1)] backdrop-blur-md p-6 rounded-2xl border border-[rgba(255,255,255,0.2)] shadow-[0_8px_32px_rgba(0,0,0,0.1)]">
                    <h2 class="text-white text-xl font-bold mb-2">کاربران فعال</h2>
                    <p class="text-[rgba(255,255,255,0.8)] text-sm">120 کاربر آنلاین</p>
                </div>

                <div class="bg-[rgba(255,255,255,0.1)] backdrop-blur-md p-6 rounded-2xl border border-[rgba(255,255,255,0.2)] shadow-[0_8px_32px_rgba(0,0,0,0.1)]">
                    <h2 class="text-white text-xl font-bold mb-2">تراکنش‌ها</h2>
                    <p class="text-[rgba(255,255,255,0.8)] text-sm">مجموع: 5,200 تومان</p>
                </div>

                <div class="bg-[rgba(255,255,255,0.1)] backdrop-blur-md p-6 rounded-2xl border border-[rgba(255,255,255,0.2)] shadow-[0_8px_32px_rgba(0,0,0,0.1)]">
                    <h2 class="text-white text-xl font-bold mb-2">پیام‌ها</h2>
                    <p class="text-[rgba(255,255,255,0.8)] text-sm">پیام‌های جدید: 7</p>
                </div>

            </div>

            <!-- Table Example -->
            <div class="mt-10 overflow-x-auto">
                <table class="w-full text-sm text-left text-white border-collapse">
                    <thead class="bg-[rgba(255,255,255,0.1)]">
                        <tr>
                            <th class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">نام</th>
                            <th class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">ایمیل</th>
                            <th class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">وضعیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-[rgba(255,255,255,0.1)]">
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">نیما</td>
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">nima@example.com</td>
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">فعال</td>
                        </tr>
                        <tr class="hover:bg-[rgba(255,255,255,0.1)]">
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">علی</td>
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">ali@example.com</td>
                            <td class="px-4 py-2 border border-[rgba(255,255,255,0.2)]">غیرفعال</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>

</html>