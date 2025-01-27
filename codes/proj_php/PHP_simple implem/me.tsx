"use client";
import { motion, useInView } from "framer-motion";
import Image from "next/image";
import { useState, useRef, useEffect } from "react";

export const ClientsSection = () => {
  const [hasAnimated, setHasAnimated] = useState(false);
  const sectionRef = useRef<HTMLDivElement>(null);
  const isInView = useInView(sectionRef);
  useEffect(() => {
    if (isInView && !hasAnimated) {
      setHasAnimated(true);
    }
  }, [isInView, hasAnimated]);

  return (
    <motion.section
      ref={sectionRef}
      initial={{ opacity: 0, scale: 0.5 }}
      animate={hasAnimated ? { opacity: 1, scale: 1 } : {}}
      transition={{ duration: 0.5 }}
      className="py-32 bg-white sm:py-16 lg:py-20">
      <div className="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div className="max-w-2xl mx-auto text-center">
          <h2 className="text-2xl font-poppins font-bold text-gray-800 sm:text-4xl sm:leading-tight">
            Trusted by leading security teams, enterprises, and high-security facilities worldwide.{" "}
          </h2>
        </div>

        <div className="grid items-center max-w-4xl grid-cols-2 mx-auto mt-12 md:mt-20 md:grid-cols-4 gap-x-10 gap-y-16">
          <div>
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/airbnb.png" alt="" />
          </div>

          <div>
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/aws.png" alt="" />
          </div>

          <div>
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/digital-ocean.png" alt="" />
          </div>

          <div>
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/docker.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/gcp.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/gitlab.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/jetbrains.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/microsoft.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/netflix.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/slack.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/spotify.png" alt="" />
          </div>

          <div className="hidden md:block">
            <Image height={200} width={200} className="mx-auto w-[70px]" src="/images/clients/twitch.png" alt="" />
          </div>
        </div>
      </div>
    </motion.section>
  );
};