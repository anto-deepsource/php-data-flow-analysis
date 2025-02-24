<?php

namespace Application\Service;

use Application\Mapper\Job as JobMapper;
use Application\Mapper\Source as SourceMapper;
use Application\Entity\Job as JobEntity;
use Application\Mapper\Project as ProjectMapper;
use Application\Entity\Project as ProjectEntity;
use Application\Mapper\ProjectSource as ProjectSourceMapper;
use Utils\Formatters\DateUtils;
use Utils\Formatters\ObjectUtils;

class Job
{
    public function __construct(
        JobMapper $jobMapper,
        ProjectMapper $projectMapper,
        ProjectSourceMapper $projectSourceMapper,
        SourceMapper $sourceMapper
    ) {
        $this->jobMapper = $jobMapper;
	}
}
