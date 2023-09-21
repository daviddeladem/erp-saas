<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation extends \Google\Collection
{
  protected $collection_key = 'tracks';
  /**
   * @var string
   */
  public $thumbnail;
  protected $tracksType = GoogleCloudVideointelligenceV1beta2Track::class;
  protected $tracksDataType = 'array';
  /**
   * @var string
   */
  public $version;

  /**
   * @param string
   */
  public function setThumbnail($thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /**
   * @return string
   */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }
  /**
   * @param GoogleCloudVideointelligenceV1beta2Track[]
   */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /**
   * @return GoogleCloudVideointelligenceV1beta2Track[]
   */
  public function getTracks()
  {
    return $this->tracks;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2FaceDetectionAnnotation');
