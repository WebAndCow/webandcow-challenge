COMPOSER ?= $(shell which composer)

.PHONY: up
up: install-vendor

.PHONY: install-vendor
install-vendor: 
	$(PHP) $(COMPOSER) install

.PHONY: clean
clean: clean-vendor

.PHONY: clean-vendor
clean-vendor:
	$(RM) -r ./vendor

.PHONY: unit-tests
unit-tests:
	./vendor/bin/phpunit -c .phpunit.xml

.PHONY: code-sniffer
code-sniffer:
	./vendor/bin/phpcs


