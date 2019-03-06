<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_events',
		\Symfony\Component\HttpKernel\KernelEvents::REQUEST,
		\Symfony\Component\HttpKernel\KernelEvents::EXCEPTION,
		\Symfony\Component\HttpKernel\KernelEvents::VIEW,
		\Symfony\Component\HttpKernel\KernelEvents::CONTROLLER,
		\Symfony\Component\HttpKernel\KernelEvents::CONTROLLER_ARGUMENTS,
		\Symfony\Component\HttpKernel\KernelEvents::RESPONSE,
		\Symfony\Component\HttpKernel\KernelEvents::TERMINATE,
		\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST,
		\Symfony\Component\Console\ConsoleEvents::COMMAND,
		\Symfony\Component\Console\ConsoleEvents::TERMINATE,
		\Symfony\Component\Console\ConsoleEvents::ERROR,
		\Symfony\Component\Form\FormEvents::PRE_SUBMIT,
		\Symfony\Component\Form\FormEvents::SUBMIT,
		\Symfony\Component\Form\FormEvents::POST_SUBMIT,
		\Symfony\Component\Form\FormEvents::PRE_SET_DATA,
		\Symfony\Component\Form\FormEvents::POST_SET_DATA,
		\Symfony\Component\Security\Core\AuthenticationEvents::AUTHENTICATION_SUCCESS,
		\Symfony\Component\Security\Core\AuthenticationEvents::AUTHENTICATION_FAILURE,
		\Symfony\Component\Security\Http\SecurityEvents::INTERACTIVE_LOGIN,
		\Symfony\Component\Security\Http\SecurityEvents::SWITCH_USER
	);
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::dispatch(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::getListeners(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::getListenerPriority(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::hasListeners(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::addListener(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::removeListener(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::doDispatch(), 1, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcher::sortListeners(), 0, argumentsSet('symfony_events'));
}