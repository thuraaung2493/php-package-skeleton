<?php

use ThuraAung\PhpPackageSkeleton\PhpPackageSkeleton;

describe('PhpPackageSkeletonTest', function (): void {
    it('should work', function (): void {
        $phpPackageSkeleton = new PhpPackageSkeleton();

        expect($phpPackageSkeleton)->toBeInstanceOf(PhpPackageSkeleton::class);
        expect($phpPackageSkeleton->work())->toBe('Hello World');
    });
});
