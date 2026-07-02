<x-filament-widgets::widget>
    <x-filament::section
        style="position: relative; overflow: hidden; border-radius: 0.75rem; border: 1px solid #bfdbfe; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); padding: 0;">

        <!-- Background Watermark Icon -->
        <div style="position: absolute; right: -2rem; top: -2rem; opacity: 0.1; pointer-events: none;">
            <x-heroicon-s-sparkles style="width: 14rem; height: 14rem; color: #2563eb;" />
        </div>

        <!-- Content Container -->
        <div style="position: relative; z-index: 10; display: flex; align-items: center; gap: 1.5rem; padding: 1.5rem;">

            <!-- Icon Badge -->
            <div
                style="display: flex; align-items: center; justify-content: center; width: 4.5rem; height: 4.5rem; background-color: #ffffff; border-radius: 9999px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); color: #2563eb; flex-shrink: 0;">
                <x-heroicon-o-building-storefront style="width: 2.25rem; height: 2.25rem;" />
            </div>

            <!-- Text Content -->
            <div>
                <h2 style="font-size: 1.5rem; font-weight: 700; color: #1e3a8a; margin: 0; line-height: 1.2;">
                    Selamat Datang di Bank Sampah!
                </h2>
                <p
                    style="margin-top: 0.5rem; font-size: 0.875rem; color: #1d4ed8; font-weight: 500; max-width: 48rem; line-height: 1.5; margin-bottom: 0;">
                    Pantau grafik transaksi hari ini, kelola data master sampah, dan atur penarikan tabungan anggota
                    dengan mudah melalui dashboard interaktif ini.
                </p>
            </div>

        </div>
    </x-filament::section>
</x-filament-widgets::widget>