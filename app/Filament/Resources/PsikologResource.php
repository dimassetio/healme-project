<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PsikologResource\Pages;
use App\Mail\EmailPsikolog;
use App\Models\Psikolog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PsikologResource extends Resource
{
    protected static ?string $model = Psikolog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('phone_number'),
                Forms\Components\DatePicker::make('birthdate'),
                Forms\Components\TextInput::make('code_psikolog'),
                Forms\Components\TextInput::make('last_education'),
                Forms\Components\FileUpload::make('profile_photo'),
                Forms\Components\TextInput::make('specialization_therapy'),
                Forms\Components\TextInput::make('service_cost_perhour'),
                Forms\Components\Select::make('status_account')
                    ->options([
                        'Pending' => 'Pending',
                        'Active' => 'Active',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->sortable(),
                Tables\Columns\TextColumn::make('code_psikolog')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_education')
                    ->sortable(),
                Tables\Columns\TextColumn::make('specialization_therapy')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_cost_perhour')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_account')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPsikologs::route('/'),
            'create' => Pages\CreatePsikolog::route('/create'),
            'edit' => Pages\EditPsikolog::route('/{record}/edit'),
        ];
    }

    public static function afterSave($record)
    {
        Log::debug("RUN AFTER SAVE");
        if ($record->wasChanged('status_account')) {
            Log::debug("RUN STATUS CHANGED");
            $message = 'Berikut adalah kode psikolog anda: ' . $record->code_psikolog;
            $subject = 'Pemberitahuan Konfirmasi Registrasi Psikolog HealMe';

            Mail::to($record->email)->send(new EmailPsikolog($message, $subject));
            Log::debug("Mail to ran");
        }
        Log::debug("Done");
    }
}
