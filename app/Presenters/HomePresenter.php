<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function createComponentMailingForm(): Form
    {
        $form = new Form();
        $form->addEmail('email', 'Your e-mail address')->setRequired('We need your e-mail !');
        $form->addCheckbox('agree', 'I agree with terms and conditions')->setRequired('This input is required');

        $form->onSuccess[] = [$this, 'formSucceeded'];

        return $form;
    }

    public function formSucceeded(Form $form, $data): void
    {

    }
}
