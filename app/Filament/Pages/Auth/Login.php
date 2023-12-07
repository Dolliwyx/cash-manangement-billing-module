<?php
// LOGIN OVERRIDE
namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseAuth;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;

class Login extends BaseAuth
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getLoginFormComponent(), 
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ])
            ->statePath('data');
    }

    protected function getLoginFormComponent(): Component 
    {
        return TextInput::make('employee_id')
            ->label('Employee ID')
            ->required()
            ->autocomplete()
            ->autofocus();
    } 

    protected function getCredentialsFromFormData(array $data): array
    {
 
        return [
            'employee_id' => $data['employee_id'],
            'password'  => $data['password'],
        ];
    }
}

