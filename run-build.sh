#!/bin/bash

eval `ssh-agent -s`
ssh-add 'C:/.ssh/key.openssh'

rm -rf $USERPROFILE'\AppData\Local\Temp\monorepo_builder'
rm -rf $USERPROFILE'\AppData\Local\Temp\monorepo_builder_log'

vendor/bin/monorepo-builder split