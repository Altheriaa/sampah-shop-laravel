<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->sidebarCollapsibleOnDesktop()
            ->brandName('Aplikasi Start-Up Bank Sampah')
            ->font('Poppins')
            ->colors([
                'primary' => \Filament\Support\Colors\Color::Blue,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([])
            ->navigationItems([
                \Filament\Navigation\NavigationItem::make('Laporan Data Nasabah')
                    ->group('Data Laporan')
                    ->url(fn (): string => url('/cetak/nasabah'))
                    ->icon('heroicon-o-printer')
                    ->openUrlInNewTab(),
                \Filament\Navigation\NavigationItem::make('Laporan Data Sampah')
                    ->group('Data Laporan')
                    ->url(fn (): string => url('/cetak/sampah'))
                    ->icon('heroicon-o-printer')
                    ->openUrlInNewTab(),
                \Filament\Navigation\NavigationItem::make('Laporan Data Transaksi')
                    ->group('Data Laporan')
                    ->url(fn (): string => url('/cetak/transaksi'))
                    ->icon('heroicon-o-printer')
                    ->openUrlInNewTab(),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
