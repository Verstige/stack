@php
$features = [
    [
        'icon' => '🚀',
        'title' => 'Instant Deployments',
        'description' => 'Push to deploy. Connect your Git repository and Ship goes live in seconds, not minutes.',
    ],
    [
        'icon' => '🔒',
        'title' => 'Self-Hosted & Secure',
        'description' => 'Your servers, your data, your control. No vendor lock-in. Full ownership forever.',
    ],
    [
        'icon' => '🐳',
        'title' => 'Containers Made Simple',
        'description' => 'Docker and Docker Compose, abstracted away. Focus on building, not configuring.',
    ],
    [
        'icon' => '💾',
        'title' => 'Database Management',
        'description' => 'PostgreSQL, MySQL, Redis, MongoDB and more. One click to provision, zero config needed.',
    ],
    [
        'icon' => '⚡',
        'title' => 'Edge-Ready',
        'description' => 'Built-in proxy, automatic SSL, and cloudflare tunnel support out of the box.',
    ],
    [
        'icon' => '👥',
        'title' => 'Team Collaboration',
        'description' => 'Role-based access, shared projects, and real-time collaboration built in.',
    ],
];

$steps = [
    [
        'number' => '01',
        'title' => 'Connect Your Server',
        'description' => 'Add any VPS, bare metal, or Raspberry Pi with a single SSH connection.',
    ],
    [
        'number' => '02',
        'title' => 'Import or Create',
        'description' => 'Connect your Git repo, choose a template, or start from scratch.',
    ],
    [
        'number' => '03',
        'title' => 'Deploy in Seconds',
        'description' => 'Automatic builds, zero-downtime deployments, and built-in monitoring.',
    ],
];

$pricing = [
    'name' => 'Stack',
    'price' => '$5',
    'period' => '/month',
    'description' => 'Everything you need to deploy and manage your apps.',
    'features' => [
        'Unlimited projects',
        'Unlimited deployments',
        'All databases included',
        'Custom domains & SSL',
        'Team collaboration',
        'Built-in monitoring',
        'Automatic backups',
        'Priority support',
    ],
];
@endphp

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack — Self-Hostable Deployment Platform</title>
    <meta name="description" content="Deploy apps, databases, and servers with zero complexity. Self-hosted alternative to Heroku, Vercel, and Netlify.">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        accent: '#2997ff',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', system-ui, sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #000 0%, #2997ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-glow {
            background: radial-gradient(ellipse 80% 50% at 50% -20%, rgba(41, 151, 255, 0.15), transparent);
        }
        .card-hover {
            transition: all 0.2s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-white dark:bg-[#0a0a0a] text-[#111] dark:text-white antialiased">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 border-b border-[#e5e5e5] dark:border-[#1c1c1c] bg-white/80 dark:bg-[#0a0a0a]/80 backdrop-blur-md">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">
                <img src="/stack-logo-transparent.svg" alt="Stack" class="w-8 h-8">
                <span class="text-xl font-bold tracking-tight">Stack</span>
            </a>
            <!-- Nav links -->
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-[#666] dark:text-[#888]">
                <a href="#features" class="hover:text-[#111] dark:hover:text-white transition-colors">Features</a>
                <a href="#how" class="hover:text-[#111] dark:hover:text-white transition-colors">How it works</a>
                <a href="#pricing" class="hover:text-[#111] dark:hover:text-white transition-colors">Pricing</a>
            </div>
            <!-- CTA -->
            <div class="flex items-center gap-3">
                <a href="/login" class="text-sm font-medium text-[#666] dark:text-[#888] hover:text-[#111] dark:hover:text-white transition-colors px-4 py-2">Sign in</a>
                <a href="/register" class="text-sm font-semibold bg-[#111] dark:bg-white text-white dark:text-[#111] px-5 py-2.5 rounded-lg hover:opacity-90 transition-opacity">Get started →</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="pt-32 pb-24 px-6 hero-glow">
        <div class="max-w-6xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[#e5e5e5] dark:border-[#1c1c1c] text-sm font-medium text-[#666] dark:text-[#888] mb-8">
                <span class="w-2 h-2 rounded-full bg-[#30d158] animate-pulse"></span>
                Now in public beta
            </div>
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold tracking-tight leading-[0.95] mb-6">
                Deploy anything.<br>
                <span class="gradient-text">Own everything.</span>
            </h1>
            <p class="text-xl md:text-2xl text-[#666] dark:text-[#888] max-w-2xl mx-auto mb-12 leading-relaxed">
                Self-host your entire deployment pipeline. Apps, databases, servers — all in one place, on your own infrastructure.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <a href="/register" class="w-full sm:w-auto text-center text-lg font-semibold bg-[#111] dark:bg-white text-white dark:text-[#111] px-8 py-4 rounded-xl hover:opacity-90 transition-opacity">
                    Start deploying free →
                </a>
                <a href="/login" class="w-full sm:w-auto text-center text-lg font-medium border border-[#e5e5e5] dark:border-[#1c1c1c] px-8 py-4 rounded-xl hover:bg-[#f5f5f5] dark:hover:bg-[#141414] transition-colors">
                    Sign in
                </a>
            </div>
            <!-- Terminal preview -->
            <div class="max-w-3xl mx-auto">
                <div class="rounded-2xl border border-[#e5e5e5] dark:border-[#1c1c1c] overflow-hidden shadow-2xl">
                    <div class="flex items-center gap-2 px-4 py-3 bg-[#f5f5f5] dark:bg-[#141414] border-b border-[#e5e5e5] dark:border-[#1c1c1c]">
                        <div class="w-3 h-3 rounded-full bg-[#ff5f57]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#febc2e]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#28c840]"></div>
                        <span class="ml-4 text-sm text-[#888] font-mono">terminal</span>
                    </div>
                    <div class="bg-[#0a0a0a] p-6 font-mono text-sm text-left">
                        <p class="text-[#6e6e6e]">$ stack deploy</p>
                        <p class="text-[#2997ff] mt-2">→ Connecting to server...</p>
                        <p class="text-[#30d158]">→ Build started</p>
                        <p class="text-[#30d158]">→ Database migrated</p>
                        <p class="text-[#30d158]">→ SSL certificate issued</p>
                        <p class="text-white mt-2">✓ Deployed in 12s</p>
                        <p class="text-[#666] mt-1">→ Live at: <span class="text-[#2997ff]">https://myapp.stack.io</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logos / Social proof -->
    <section class="py-16 px-6 border-t border-b border-[#e5e5e5] dark:border-[#1c1c1c]">
        <div class="max-w-6xl mx-auto">
            <p class="text-center text-sm text-[#888] mb-8">Trusted by developers deploying on their own terms</p>
            <div class="flex flex-wrap items-center justify-center gap-12 opacity-50 grayscale">
                <!-- Placeholder tech logos as text -->
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">Laravel</span>
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">Next.js</span>
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">Docker</span>
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">PostgreSQL</span>
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">Redis</span>
                <span class="text-lg font-bold text-[#333] dark:text-[#ccc]">Nginx</span>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-24 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold text-[#666] dark:text-[#888] uppercase tracking-wider mb-4">Features</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">Everything you need</h2>
                <p class="text-xl text-[#666] dark:text-[#888] max-w-xl mx-auto">One platform to rule them all. No stitching together CI/CD pipelines, no managing separate database services.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($features as $feature)
                <div class="p-8 rounded-2xl border border-[#e5e5e5] dark:border-[#1c1c1c] card-hover bg-white dark:bg-[#0a0a0a]">
                    <div class="text-3xl mb-4">{{ $feature['icon'] }}</div>
                    <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-[#666] dark:text-[#888] leading-relaxed">{{ $feature['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section id="how" class="py-24 px-6 bg-[#f5f5f5] dark:bg-[#0f0f0f]">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold text-[#666] dark:text-[#888] uppercase tracking-wider mb-4">How it works</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">Three steps to production</h2>
                <p class="text-xl text-[#666] dark:text-[#888]">From zero to deployed in under 5 minutes.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($steps as $step)
                <div class="relative">
                    <div class="text-8xl font-black text-[#f5f5f5] dark:text-[#1c1c1c] absolute -top-4 -left-2 select-none">{{ $step['number'] }}</div>
                    <div class="relative pt-12">
                        <h3 class="text-xl font-semibold mb-3">{{ $step['title'] }}</h3>
                        <p class="text-[#666] dark:text-[#888] leading-relaxed">{{ $step['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-24 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-sm font-semibold text-[#666] dark:text-[#888] uppercase tracking-wider mb-4">Pricing</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">Simple pricing</h2>
                <p class="text-xl text-[#666] dark:text-[#888]">One plan, everything included. No surprise charges.</p>
            </div>
            <div class="max-w-md mx-auto">
                <div class="p-10 rounded-3xl border-2 border-[#111] dark:border-white bg-white dark:bg-[#0a0a0a]">
                    <div class="flex items-end gap-2 mb-2">
                        <span class="text-6xl font-black tracking-tight">{{ $pricing['price'] }}</span>
                        <span class="text-xl text-[#666] dark:text-[#888] mb-3">{{ $pricing['period'] }}</span>
                    </div>
                    <p class="text-[#666] dark:text-[#888] mb-8">{{ $pricing['description'] }}</p>
                    <a href="/register" class="block text-center text-lg font-semibold bg-[#111] dark:bg-white text-white dark:text-[#111] py-4 rounded-xl hover:opacity-90 transition-opacity mb-8">
                        Get started
                    </a>
                    <ul class="space-y-4">
                        @foreach($pricing['features'] as $feature)
                        <li class="flex items-center gap-3 text-[#333] dark:text-[#ccc]">
                            <svg class="w-5 h-5 text-[#30d158] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-24 px-6 bg-[#111] dark:bg-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white dark:text-[#111] mb-6">Ready to own your infrastructure?</h2>
            <p class="text-xl text-[#888] dark:text-[#666] mb-12">Join developers who chose self-hosted. Full control, no compromises.</p>
            <a href="/register" class="inline-block text-lg font-semibold bg-white dark:bg-[#111] text-[#111] dark:text-white px-10 py-4 rounded-xl hover:opacity-90 transition-opacity">
                Start for free →
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-6 border-t border-[#e5e5e5] dark:border-[#1c1c1c]">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <img src="/stack-logo-transparent.svg" alt="Stack" class="w-6 h-6">
                <span class="font-semibold">Stack</span>
                <span class="text-[#888]">© 2026</span>
            </div>
            <div class="flex items-center gap-8 text-sm text-[#888]">
                <a href="/docs" class="hover:text-[#111] dark:hover:text-white transition-colors">Documentation</a>
                <a href="/privacy" class="hover:text-[#111] dark:hover:text-white transition-colors">Privacy</a>
                <a href="/terms" class="hover:text-[#111] dark:hover:text-white transition-colors">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>
